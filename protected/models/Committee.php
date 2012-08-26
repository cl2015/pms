<?php

/**
 * This is the model class for table "committees".
 *
 * The followings are the available columns in table 'committees':
 * @property string $id
 * @property string $name
 * @property string $gender
 * @property string $date_of_bitrh
 * @property string $educational_background
 * @property string $title
 * @property string $position
 * @property string $specialty
 * @property string $organization
 * @property string $contact
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Committee extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Committee the static model class
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
		return 'committees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, gender, date_of_bitrh, educational_background, title, position, specialty, organization, contact', 'length', 'max'=>256),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, gender, date_of_bitrh, educational_background, title, position, specialty, organization, contact, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'name' => '姓名',
			'gender' => '性别',
			'date_of_bitrh' => '出生年月',
			'educational_background' => '学历',
			'title' => '职称',
			'position' => '学委会职务',
			'specialty' => '专业',
			'organization' => '工作单位',
			'contact' => '联系方式',
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
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_bitrh',$this->date_of_bitrh,true);
		$criteria->compare('educational_background',$this->educational_background,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('specialty',$this->specialty,true);
		$criteria->compare('organization',$this->organization,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}