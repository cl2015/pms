<?php

/**
 * This is the model class for table "laboratories".
 *
 * The followings are the available columns in table 'laboratories':
 * @property string $id
 * @property string $name
 * @property string $copyright
 * @property string $area
 * @property string $project_time
 * @property string $acceptance_time
 * @property string $last_assessment_time
 * @property string $lab_director
 * @property string $gender
 * @property string $date_of_birth
 * @property string $degree
 * @property string $title
 * @property string $is_academy_of_sciences
 * @property string $duty
 * @property string $experty
 * @property string $commitee_director
 * @property string $gender2
 * @property string $date_of_birth2
 * @property string $degree2
 * @property string $title2
 * @property string $is_academy_of_sciences2
 * @property string $duty2
 * @property string $experty2
 * @property string $dependent
 * @property string $heigher_authorty
 * @property string $nature
 * @property string $phone
 * @property string $address
 * @property string $zip_code
 * @property string $office_phone
 * @property string $office_fax
 * @property string $first_evaluation_time
 * @property string $second_evaluation_time
 * @property string $third_evaluation_time
 * @property string $forth_evaluation_time
 * @property string $fifth_evaluation_time
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Laboratory extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Laboratory the static model class
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
		return 'laboratories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, copyright, area, project_time, acceptance_time, last_assessment_time, gender, date_of_birth, degree, title, is_academy_of_sciences, duty, experty,experty2, commitee_director, gender2, date_of_birth2, degree2, title2, is_academy_of_sciences2, duty2, dependent, heigher_authorty, nature, phone, address, zip_code, office_phone, office_fax, first_evaluation_time, second_evaluation_time, third_evaluation_time, forth_evaluation_time, fifth_evaluation_time', 'length', 'max'=>255),
			array('lab_director', 'length', 'max'=>32),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, copyright, area, project_time, acceptance_time, last_assessment_time, lab_director, gender, date_of_birth, degree, title, is_academy_of_sciences, duty, experty,experty2, commitee_director, gender2, date_of_birth2, degree2, title2, is_academy_of_sciences2, duty2, dependent, heigher_authorty, nature, phone, address, zip_code, office_phone, office_fax, first_evaluation_time, second_evaluation_time, third_evaluation_time, forth_evaluation_time, fifth_evaluation_time, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'name' => '实验室名称',
			'copyright' => 'Copyright',
			'area' => '建筑面积',
			'project_time' => '立项时间',
			'acceptance_time' => '验收时间',
			'last_assessment_time' => '上次评估时间',
			'lab_director' => '实验室主任',
			'gender' => '性别',
			'date_of_birth' => '出生年月',
			'degree' => '最终学历/学位',
			'title' => '职称',
			'is_academy_of_sciences' => '是否院士',
			'duty' => '职务',
			'experty' => '学科专长',
			'commitee_director' => '学术委员会主任',
			'gender2' => '性别',
			'date_of_birth2' => '出生年月',
			'degree2' => '最终学历/学位',
			'title2' => '职称',
			'is_academy_of_sciences2' => '是否院士',
			'duty2' => '职务',
			'experty2' => '学科专长',
			'dependent' => '依托单位',
			'heigher_authorty' => '上级主管部门',
			'nature' => '性质',
			'phone' => '依托单位电话',
			'address' => '详细地址',
			'zip_code' => '邮政编码',
			'office_phone' => '管理办公室电话',
			'office_fax' => '管理办公室传真',
			'first_evaluation_time' => '第1次评估时间',
			'second_evaluation_time' => '第2次评估时间',
			'third_evaluation_time' => '第3次评估时间',
			'forth_evaluation_time' => '第4次评估时间',
			'fifth_evaluation_time' => '第5次评估时间',
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
		$criteria->compare('copyright',$this->copyright,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('project_time',$this->project_time,true);
		$criteria->compare('acceptance_time',$this->acceptance_time,true);
		$criteria->compare('last_assessment_time',$this->last_assessment_time,true);
		$criteria->compare('lab_director',$this->lab_director,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('is_academy_of_sciences',$this->is_academy_of_sciences,true);
		$criteria->compare('duty',$this->duty,true);
		$criteria->compare('experty',$this->experty,true);
		$criteria->compare('commitee_director',$this->commitee_director,true);
		$criteria->compare('gender2',$this->gender2,true);
		$criteria->compare('date_of_birth2',$this->date_of_birth2,true);
		$criteria->compare('degree2',$this->degree2,true);
		$criteria->compare('title2',$this->title2,true);
		$criteria->compare('is_academy_of_sciences2',$this->is_academy_of_sciences2,true);
		$criteria->compare('duty2',$this->duty2,true);
		$criteria->compare('experty2',$this->experty2,true);
		$criteria->compare('dependent',$this->dependent,true);
		$criteria->compare('heigher_authorty',$this->heigher_authorty,true);
		$criteria->compare('nature',$this->nature,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('office_phone',$this->office_phone,true);
		$criteria->compare('office_fax',$this->office_fax,true);
		$criteria->compare('first_evaluation_time',$this->first_evaluation_time,true);
		$criteria->compare('second_evaluation_time',$this->second_evaluation_time,true);
		$criteria->compare('third_evaluation_time',$this->third_evaluation_time,true);
		$criteria->compare('forth_evaluation_time',$this->forth_evaluation_time,true);
		$criteria->compare('fifth_evaluation_time',$this->fifth_evaluation_time,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}