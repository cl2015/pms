<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */

$this->breadcrumbs=array(
	'实验室'=>array('index'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'列表', 'url'=>array('index')),
	//array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除?')),
	//array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看实验室 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'copyright',
		'area',
		'project_time',
		'acceptance_time',
		'last_assessment_time',
		'lab_director',
		'gender',
		'date_of_birth',
		'degree',
		'title',
		'is_academy_of_sciences',
		'duty',
		'experty',
		'commitee_director',
		'gender2',
		'date_of_birth2',
		'degree2',
		'title2',
		'is_academy_of_sciences2',
		'duty2',
		'experty2',
		'dependent',
		'heigher_authorty',
		'nature',
		'phone',
		'address',
		'zip_code',
		'office_phone',
		'office_fax',
		'first_evaluation_time',
		'second_evaluation_time',
		'third_evaluation_time',
		'forth_evaluation_time',
		'fifth_evaluation_time',
	),
)); ?>
