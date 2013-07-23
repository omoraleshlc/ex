<?php

/**
 * This is the model class for table "articulos".
 *
 * The followings are the available columns in table 'articulos':
 * @property integer $keyI
 * @property string $descripcion1
 * @property string $descripcion2
 * @property integer $cbarra
 * @property string $grupo
 */
class Articulos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Articulos the static model class
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
		return 'articulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion1, descripcion2, cbarra, grupo', 'required'),
			array('cbarra', 'numerical', 'integerOnly'=>true),
			array('descripcion1, descripcion2', 'length', 'max'=>200),
			array('grupo', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyI, descripcion1, descripcion2, cbarra, grupo', 'safe', 'on'=>'search'),
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
			'keyI' => 'Key I',
			'descripcion1' => 'Descripcion1',
			'descripcion2' => 'Descripcion2',
			'cbarra' => 'Cbarra',
			'grupo' => 'Grupo',
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

		$criteria->compare('keyI',$this->keyI);
		$criteria->compare('descripcion1',$this->descripcion1,true);
		$criteria->compare('descripcion2',$this->descripcion2,true);
		$criteria->compare('cbarra',$this->cbarra);
		$criteria->compare('grupo',$this->grupo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}