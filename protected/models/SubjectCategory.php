<?php

/**
 * This is the model class for table "subject_categories".
 *
 * The followings are the available columns in table 'subject_categories':
 * @property string $id
 * @property integer $sort
 * @property string $name
 * @property string $unit_in_charge
 * @property string $score
 * @property string $remark
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class SubjectCategory extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubjectCategory the static model class
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
		return 'subject_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort', 'numerical', 'integerOnly'=>true),
			array('name, unit_in_charge, score', 'length', 'max'=>256),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('remark, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sort, name, unit_in_charge, score, remark, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'name' => '名称',
			'unit_in_charge' => '主管单位',
			'score' => '分数',
			'remark' => '备注',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('unit_in_charge',$this->unit_in_charge,true);
		$criteria->compare('score',$this->score,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}