<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $nama
 * @property string $password
 * @property string $no_hp
 * @property string $tgl_lahir
 * @property string $email
 * @property string $jenis_kelamin
 * @property string $no_ktp
 * @property string $foto_diri
 */
class UsersJson extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, password, no_hp, tgl_lahir, email, jenis_kelamin, no_ktp, foto_diri', 'required'),
			array('nama, password, email, foto_diri', 'length', 'max'=>100),
			array('no_hp', 'length', 'max'=>12),
			array('jenis_kelamin', 'length', 'max'=>2),
			array('no_ktp', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama, password, no_hp, tgl_lahir, email, jenis_kelamin, no_ktp, foto_diri', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'password' => 'Password',
			'no_hp' => 'No Hp',
			'tgl_lahir' => 'Tgl Lahir',
			'email' => 'Email',
			'jenis_kelamin' => 'Jenis Kelamin',
			'no_ktp' => 'No Ktp',
			'foto_diri' => 'Foto Diri',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('no_ktp',$this->no_ktp,true);
		$criteria->compare('foto_diri',$this->foto_diri,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersJson the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
