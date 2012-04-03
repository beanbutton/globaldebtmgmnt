<?php

/**
 * This is the model class for table "tbl_creditor".
 *
 * The followings are the available columns in table 'tbl_creditor':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property integer $Fk_debtor_id
 * @property string $badge_number
 * @property string $name
 * @property string $address
 * @property string $telephone1
 * @property string $telephone1_ext
 * @property string $telephone2
 * @property string $telephone2_ext
 * @property string $email
 * @property string $faxnumber
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 * @property string $postal_code
 *
 * The followings are the available model relations:
 * @property TblDebtor $fkDebtor
 * @property TblUser $fkUser
 */
class Creditor extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * @return Creditor the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'tbl_creditor';
	}

	public function beforeSave() {
		if ($this -> isNewRecord) {
			$this -> created_at = new CDbExpression('NOW()');
		} else {
			$this -> updated_at = new CDbExpression('NOW()');
		}
		return parent::beforeSave();
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//array('Fk_user_id, created_at', 'required'),
		array('Fk_user_id, Fk_debtor_id', 'numerical', 'integerOnly'=>true),
		array('badge_number, name, address, telephone1, telephone2, email, faxnumber, comments, postal_code', 'length', 'max' => 255), 
		array('telephone1_ext, telephone2_ext', 'length', 'max' => 6), 
		array('updated_at', 'safe'),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		array('id, Fk_user_id, Fk_debtor_id, badge_number, name, address, telephone1, telephone1_ext, telephone2, telephone2_ext, email, faxnumber, comments, created_at, updated_at, postal_code', 'safe', 'on' => 'search'), );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('fkDebtor' => array(self::BELONGS_TO, 'TblDebtor', 'Fk_debtor_id'), 'fkUser' => array(self::BELONGS_TO, 'TblUser', 'Fk_user_id'), );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array('id' => 'ID', 'Fk_user_id' => 'Fk User', 'Fk_debtor_id' => 'Fk Debtor', 'badge_number' => 'Badge Number', 'name' => 'Name', 'address' => 'Address', 'telephone1' => 'Telephone1', 'telephone1_ext' => 'Telephone1 Ext', 'telephone2' => 'Telephone2', 'telephone2_ext' => 'Telephone2 Ext', 'email' => 'Email', 'faxnumber' => 'Faxnumber', 'comments' => 'Comments', 'created_at' => 'Created At', 'updated_at' => 'Updated At', 'postal_code' => 'Postal Code', );
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria -> compare('id', $this -> id);
		$criteria -> compare('Fk_user_id', $this -> Fk_user_id);
		$criteria -> compare('Fk_debtor_id', $this -> Fk_debtor_id);
		$criteria -> compare('badge_number', $this -> badge_number, true);
		$criteria -> compare('name', $this -> name, true);
		$criteria -> compare('address', $this -> address, true);
		$criteria -> compare('telephone1', $this -> telephone1, true);
		$criteria -> compare('telephone1_ext', $this -> telephone1_ext, true);
		$criteria -> compare('telephone2', $this -> telephone2, true);
		$criteria -> compare('telephone2_ext', $this -> telephone2_ext, true);
		$criteria -> compare('email', $this -> email, true);
		$criteria -> compare('faxnumber', $this -> faxnumber, true);
		$criteria -> compare('comments', $this -> comments, true);
		$criteria -> compare('created_at', $this -> created_at, true);
		$criteria -> compare('updated_at', $this -> updated_at, true);
		$criteria -> compare('postal_code', $this -> postal_code, true);

		return new CActiveDataProvider($this, array('criteria' => $criteria, ));
	}

	public function getAllDebtors() {
		$debtors = Debtor::model() -> findAll();
		$file_numbers = array();
		foreach ($debtors as $debtor) {
			$file_numbers[$debtor -> id] = $debtor -> file_number;
		}
		return $file_numbers;
	}

}
