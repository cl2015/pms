<?php

/**
 * This is the model class for table "patents".
 *
 * The followings are the available columns in table 'patents':
 * @property string $id
 * @property string $title
 * @property string $inventor
 * @property string $accept_time
 * @property string $authorized_time
 * @property string $is_sale
 * @property string $detail
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Patent extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'length', 'max'=>512),
			array('inventor', 'length', 'max'=>128),
			array('accept_time, authorized_time, is_sale', 'length', 'max'=>64),
			array('detail', 'length', 'max'=>256),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, inventor, accept_time, authorized_time, is_sale, detail,created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '名称',
			'inventor' => '发明人',
			'accept_time' => '受理时间',
			'authorized_time' => '授权时间',
			'is_sale' => '是否转让',
			'detail' => '详情',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'updated_by' => 'Updated By',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('inventor',$this->inventor,true);
		$criteria->compare('accept_time',$this->accept_time,true);
		$criteria->compare('authorized_time',$this->authorized_time,true);
		$criteria->compare('is_sale',$this->is_sale,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		$setting = Setting::model()->findByPk(1);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
					'pageSize'=>$setting->pagesize,
			)
		));
	}
}