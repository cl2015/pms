<?php

/**
 * This is the model class for table "equipments".
 *
 * The followings are the available columns in table 'equipments':
 * @property string $id
 * @property string $name
 * @property string $price
 * @property string $enable_time
 * @property string $current_status
 * @property string $performance
 * @property string $level
 * @property string $effect
 * @property string $borrow
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Equipment extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Equipment the static model class
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
		return 'equipments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, price, enable_time, current_status, performance, level, effect, borrow', 'length', 'max'=>256),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, price, enable_time, current_status, performance, level, effect, borrow, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'name' => '设备名称',
			'price' => '价格',
			'enable_time' => '启用时间',
			'current_status' => '启用时间',
			'performance' => '主要性能指标',
			'level' => '设备水平',
			'effect' => '发挥作用',
			'borrow' => '对外借用情况',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('enable_time',$this->enable_time,true);
		$criteria->compare('current_status',$this->current_status,true);
		$criteria->compare('performance',$this->performance,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('effect',$this->effect,true);
		$criteria->compare('borrow',$this->borrow,true);
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