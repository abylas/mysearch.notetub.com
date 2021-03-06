<?php

/**
 * This is the model class for table "{{dns}}".
 *
 * The followings are the available columns in table '{{dns}}':
 * @property integer $id
 * @property string $environment
 * @property string $arecord
 * @property string $cname
 * @property string $microservice
 * @property integer $create_time
 * @property integer $update_time
 */
class Dns extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Dns the static model class
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
		return '{{dns}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_time, update_time', 'numerical', 'integerOnly'=>true),
			array('environment, arecord, cname, microservice', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, environment, arecord, cname, microservice, create_time, update_time', 'safe', 'on'=>'search'),
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
			'environment' => 'Environment',
			'arecord' => 'Arecord',
			'cname' => 'Cname',
			'microservice' => 'Microservice',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('environment',$this->environment,true);
		$criteria->compare('arecord',$this->arecord,true);
		$criteria->compare('cname',$this->cname,true);
		$criteria->compare('microservice',$this->microservice,true);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}