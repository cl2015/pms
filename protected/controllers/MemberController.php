<?php

class MemberController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','export'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','export','setting','stat','access'),
				'users'=>array('@'),
				'expression'=>'$user->isAdmin||$user->isEditor',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Member;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Member']))
		{
			$model->attributes=$_POST['Member'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Member']))
		{
			$model->attributes=$_POST['Member'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$setting = Setting::model()->findByPk(1);
		$column = '';
		if(isset($setting)){
			$column = $setting->member_column;
		}
		$dataProvider=new CActiveDataProvider('Member' , 
				array( 
						'criteria'=>array(
								'order'=>'sort ASC'
						),
						'pagination'=>array(
								'pageSize'=>$this->setting->pagesize,
						)
				));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'column'=>$this->string2array($column),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Member('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Member']))
			$model->attributes=$_GET['Member'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Member::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='member-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionExport($years){
		$members = Member::model()->findAll();
		$this->layout = false;
		$filename = 'table10';
		header('Content-type:text/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		$this->render('export',array('members'=>$members,'years'=>$years));
	}
	
	public function actionSetting(){
		$model = Setting::model()->findByPk(1);
		if(isset($_POST['Setting']))
		{
			$model->attributes=$_POST['Setting'];
			$model->member_column = $this->array2string($model->member_column);
			if($model->save())
				$this->redirect(array('index'));
		}
		$model->member_column = $this->string2array($model->member_column);
		$this->render('setting',array(
			'model'=>$model,
		));
	}
	
	public function actionStat(){
		$setting = Setting::model()->findByPk(1);
		//age pie
		$pieMore = Member::model()->count("date_of_birth < :date1",
				array(':date1'=>(date('Y') - $setting->age1) . date('-m-d')));
		$pieBetween = Member::model()->count("date_of_birth between :date1 and :date2 ",
				array(':date1'=>(date('Y') - $setting->age1) . date('-m-d') ,':date2'=>(date('Y') - $setting->age2) . date('-m-d')));
		$pieLess = Member::model()->count("date_of_birth > :date2",
				array(':date2'=>(date('Y') - $setting->age2) . date('-m-d')));
		//title pie
		$criteria = new CDbCriteria();
		$criteria->group = 'title';
		$criteria->select = 'title,count(id) as id';
		$criteria->order  = " field (title,'研究员实习员','助理研究员','副研究员','研究员') desc";
		$titlePie = Member::model()->findAll($criteria);
		//research_direction Histogram
		$researchDirectionCriteria = new CDbCriteria();
		$researchDirectionCriteria->select = 'research_direction,count(id) as id';
		$researchDirectionCriteria->group = 'research_direction';
		$researchDirections = Member::model()->findAll($researchDirectionCriteria);
		
		$this->render('stat',array(
				'ages'=>array(
						$setting->age1 . '岁以下' => $pieLess ,
						$setting->age1 . '-' . $setting->age2 . '岁' => $pieBetween,
						$setting->age2 . '岁以上' => $pieMore),
				'titles' => $titlePie,
				'researchDirections' => $researchDirections
				));
	}
	
	public function actionAccess(){
		$members = Member::model()->findAll();
		$dsn = "DRIVER={Microsoft Access Driver (*.mdb)};DBQ=".realpath(Yii::app()->params['access']['path']);
		$conn = @odbc_connect($dsn,Yii::app()->params['access']['username'],Yii::app()->params['access']['password'],SQL_CUR_USE_ODBC ) or die ("Connect Error!");
		
		foreach($members as $member){
			@odbc_exec($conn,"insert into table10 (xh,xm,xb,csny,zc,xstx,zzxl,zytc,years) values (" . 
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->sort)?' ':$member->sort) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->name)?' ':$member->name) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->gender)?' ':$member->gender) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->date_of_birth)?'0000-00-00':$member->date_of_birth) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->title)?' ':$member->title) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->qualification)?' ':$member->qualification) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->honorary_title)?' ':$member->honorary_title) . "'," .
					"'" . iconv("UTF-8","GBK//IGNORE",empty($member->area_of_expertise)?' ':$member->area_of_expertise) . "'," .
					"'" . date('Y') . "')");
		}
		echo 'export ok';
	}
}
