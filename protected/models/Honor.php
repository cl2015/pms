<?php

/**
 * This is the model class for table "honors".
 *
 * The followings are the available columns in table 'honors':
 * @property string $id
 * @property string $name
 * @property string $level
 * @property string $winner
 * @property string $bonus_time
 * @property string $certificate_location
 * @property string $detail
 * @property string $species
 * @property string $category
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 */
class Honor extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Honor the static model class
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
		return 'honors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>512),
			array('level, winner, bonus_time, certificate_location', 'length', 'max'=>64),
			array('category, species', 'length', 'max'=>64),
			array('detail,winner', 'length', 'max'=>255),
			array('created_by, updated_by', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, level, winner, bonus_time, certificate_location, detail, created_by, created_at, updated_by, updated_at', 'safe', 'on'=>'search'),
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
			'name' => '科技成果名称',
			'species' => '种类',
			'category' => '类别',
			'level' => '所获奖项',
			'winner' => '负责人及主要完成者',
			'bonus_time' => '授奖时间',
			'certificate_location' => '授奖单位',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('winner',$this->winner,true);
		$criteria->compare('bonus_time',$this->bonus_time,true);
		$criteria->compare('certificate_location',$this->certificate_location,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * 负责人和主要完成者不属于本实验室者请标注“#”。
	 * @see CActiveRecord::beforeSave()
	 */
	
	public function beforeSave(){
		parent::beforeSave();
		if(isset($this->winner)){
			$this->winner = str_replace('#','',$this->winner);
			$winnerArr = explode('、',$this->winner);
			$this->winner = '';
			//var_dump($winnerArr);
			foreach($winnerArr as $winner){
				$member = Member::model()->findByAttributes(array('name'=>trim($winner)));
				if($member === null){
					$this->winner .= $this->winner == ''?$winner . '#':'、'.$winner . '#';
				}else{
					$this->winner .= $this->winner == ''?$winner :'、'.$winner;
				}
			}
		}
		return true;
	}
	
}