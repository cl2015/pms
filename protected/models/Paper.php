<?php

/**
 * This is the model class for table "papers".
 *
 * The followings are the available columns in table 'papers':
 * @property string $id
 * @property string $title
 * @property string $author
 * @property string $post_time
 * @property string $periodical_info
 * @property string $paper_category
 * @property string $research_direction
 * @property string $detail
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Paper extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paper the static model class
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
		return 'papers';
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
			array('author', 'length', 'max'=>128),
			array('post_time, periodical_info', 'length', 'max'=>64),
			array('paper_category, research_direction, detail', 'length', 'max'=>256),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, author, post_time, periodical_info, paper_category, research_direction,detail, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'title' => '题目',
			'author' => '作者',
			'post_time' => '发表时间',
			'periodical_info' => '期刊信息',
			'paper_category' => '论著类别',
			'research_direction' => '方向',
			'detail' => '证据',
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
		$criteria->compare('author',$this->author,true);
		$criteria->compare('post_time',$this->post_time,true);
		$criteria->compare('periodical_info',$this->periodical_info,true);
		$criteria->compare('paper_category',$this->paper_category,true);
		$criteria->compare('research_direction',$this->research_direction,true);
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