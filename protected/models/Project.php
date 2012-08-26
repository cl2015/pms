<?php

/**
 * This is the model class for table "projects".
 *
 * The followings are the available columns in table 'projects':
 * @property string $id
 * @property integer $sort
 * @property string $category
 * @property string $name
 * @property string $owner
 * @property string $members
 * @property string $begin_date
 * @property string $end_date
 * @property double $total_funding
 * @property double $first_funding
 * @property double $second_funding
 * @property double $third_funding
 * @property double $forth_funding
 * @property double $fif_funding
 * @property double $funding_2014
 * @property double $funding_2015
 * @property double $funding_2016
 * @property double $equipment_funding
 * @property string $research_direction
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Project extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category','required'),	
				
			array('sort', 'numerical', 'integerOnly'=>true),
			array('total_funding, first_funding, second_funding, third_funding, forth_funding, fif_funding, funding_2014 , funding_2015 , funding_2016 ,  equipment_funding', 'numerical'),
			array('category, name, research_direction', 'length', 'max'=>256),
			array('owner', 'length', 'max'=>128),
			array('members', 'length', 'max'=>512),
			array('begin_date, end_date', 'length', 'max'=>64),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sort, category, name, owner, members, begin_date, end_date, total_funding, first_funding, second_funding, third_funding, forth_funding, fif_funding, equipment_funding, research_direction, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'sort' => '排序',
			'category' => '类别',
			'name' => '名称',
			'owner' => '负责人',
			'members' => '参加人',
			'begin_date' => '开始时间',
			'end_date' => '结束时间',
			'total_funding' => '总经费',
			'first_funding' => '2009',
			'second_funding' => '2010',
			'third_funding' => '2011',
			'forth_funding' => '2012',
			'fif_funding' => '2013',
			'funding_2014' => '2014',
			'funding_2015' => '2015',
			'funding_2016' => '2016',
			'equipment_funding' => '设备采购费',
			'research_direction' => '所属方向',
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
		$criteria->compare('sort',$this->sort);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('members',$this->members,true);
		$criteria->compare('begin_date',$this->begin_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('total_funding',$this->total_funding);
		$criteria->compare('first_funding',$this->first_funding);
		$criteria->compare('second_funding',$this->second_funding);
		$criteria->compare('third_funding',$this->third_funding);
		$criteria->compare('forth_funding',$this->forth_funding);
		$criteria->compare('fif_funding',$this->fif_funding);
		$criteria->compare('funding_2014',$this->funding_2014);
		$criteria->compare('funding_2015',$this->funding_2015);
		$criteria->compare('funding_2016',$this->funding_2016);
		$criteria->compare('equipment_funding',$this->equipment_funding);
		$criteria->compare('research_direction',$this->research_direction,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}