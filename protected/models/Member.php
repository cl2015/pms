<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property string $id
 * @property integer $sort
 * @property string $research_direction
 * @property string $research_unit
 * @property string $name
 * @property string $english_name
 * @property string $date_of_birth
 * @property string $gender
 * @property string $qualification
 * @property string $degree
 * @property string $title
 * @property string $area_of_expertise
 * @property string $phd_mentor
 * @property string $master_mentor
 * @property string $enter_date
 * @property string $out_date
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property string $honorary_title
 */
class Member extends TrackStarActiveRecord
{
	public $column = array(
			'sort' => '排序',
			'research_direction' => '所属方向',
			'research_unit' => '所属单元',
			'name' => '中文名',
			'english_name' => '英文名',
			'date_of_birth' => '出生日期(yyyy-mm-dd)',
			'gender' => '性别',
			'qualification' => '学历',
			'degree' => '学位',
			'title' => '职称',
			'area_of_expertise' => '专业领域',
			'phd_mentor' => '博导',
			'master_mentor' => '硕导',
			'enter_date' => '进室时间',
			'out_date' => '出室时间',
			'honorary_title' => '学术头衔/荣誉称号',

			);
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
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
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, date_of_birth', 'required'),
			array('sort', 'numerical', 'integerOnly'=>true),
			array('research_direction, research_unit, english_name, phd_mentor, master_mentor', 'length', 'max'=>256),
			array('name, date_of_birth, gender, qualification, degree, title, area_of_expertise, enter_date, out_date, honorary_title', 'length', 'max'=>64),
			array('date_of_birth','length','max'=>10),
			array('date_of_birth','length','min'=>10),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sort, research_direction, research_unit, name, english_name, date_of_birth, gender, qualification, degree, title, area_of_expertise, phd_mentor, master_mentor, enter_date, out_date, created_by, created_at, updated_by, updated_at, honorary_title', 'safe', 'on'=>'search'),
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
			'research_direction' => '所属方向',
			'research_unit' => '所属单元',
			'name' => '中文名',
			'english_name' => '英文名',
			'date_of_birth' => '出生日期(yyyy-mm-dd)',
			'gender' => '性别',
			'qualification' => '学历',
			'degree' => '学位',
			'title' => '职称',
			'area_of_expertise' => '专业领域',
			'phd_mentor' => '博导',
			'master_mentor' => '硕导',
			'enter_date' => '进室时间',
			'out_date' => '出室时间',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'updated_by' => 'Updated By',
			'updated_at' => 'Updated At',
			'honorary_title' => '学术头衔/荣誉称号',
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
		$criteria->compare('research_direction',$this->research_direction,true);
		$criteria->compare('research_unit',$this->research_unit,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('english_name',$this->english_name,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('area_of_expertise',$this->area_of_expertise,true);
		$criteria->compare('phd_mentor',$this->phd_mentor,true);
		$criteria->compare('master_mentor',$this->master_mentor,true);
		$criteria->compare('enter_date',$this->enter_date,true);
		$criteria->compare('out_date',$this->out_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getTitleOptions(){
		return array(
				'研究员'=>'研究员',
				'副研究员'=>'副研究员',
				'助理研究员'=>'助理研究员',
				'研究员实习员'=>'研究员实习员',
		);
	}
	
}