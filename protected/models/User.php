<?php


/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property integer $remember_me
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblAccountPayable[] $tblAccountPayables
 * @property TblAccountReceivable[] $tblAccountReceivables
 * @property TblClient[] $tblClients
 * @property TblCreditor[] $tblCreditors
 * @property TblDebtor[] $tblDebtors
 * @property TblEmployee[] $tblEmployees
 * @property TblFileUploadItem[] $tblFileUploadItems
 * @property TblNegotiator[] $tblNegotiators
 */
require_once (dirname(__FILE__) . '/../extensions/aes/AES.class.php');
 
class User extends CActiveRecord {
	
	public function scopeMembersOnline()
	{
		
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array( 
		//array('created_at, updated_at', 'required'), 
		//array('remember_me', 'numerical', 'integerOnly' => true),
		array('username, password', 'length', 'max' => 255), 
		//array('username, password, salt', 'length', 'max' => 255),
		// The following rule is used by search().
		// Please remove those attributes that should not be searched.
		//array('id, username, password, salt, remember_me, created_at, updated_at', 'safe', 'on' => 'search'), );
		array('id, username, password,  created_at, updated_at', 'safe', 'on' => 'search'), );

	}

	/**
	 * @return before save
	 */
	public function beforeSave() {
		$aes = new AES(AES::$z);
		if ($this -> isNewRecord) {
			$this -> password = sha1( $this -> password );
			//$this -> salt = md5($this -> password);
			$this -> created_at = new CDbExpression('NOW()');
		} else {
			//$this -> salt = md5($this -> password);
			$this -> password = sha1( $this -> password );
			$this -> updated_at = new CDbExpression('NOW()');

		}

		return parent::beforeSave();
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('tblAccountPayables' => array(self::HAS_MANY, 'TblAccountPayable', 'Fk_user_id'), 'tblAccountReceivables' => array(self::HAS_MANY, 'TblAccountReceivable', 'Fk_user_id'), 'tblClients' => array(self::HAS_MANY, 'TblClient', 'Fk_user_id'), 'tblCreditors' => array(self::HAS_MANY, 'TblCreditor', 'Fk_user_id'), 'tblDebtors' => array(self::HAS_MANY, 'TblDebtor', 'Fk_user_id'), 'tblEmployees' => array(self::HAS_MANY, 'TblEmployee', 'Fk_user_id'), 'tblFileUploadItems' => array(self::HAS_MANY, 'TblFileUploadItem', 'Fk_user_id'), 'tblNegotiators' => array(self::HAS_MANY, 'TblNegotiator', 'Fk_user_id'), );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array('id' => 'ID', 'username' => 'Username', 'password' => 'Password', 'salt' => 'Salt', 'remember_me' => 'Remember Me', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
		$criteria -> compare('username', $this -> username, true);
		$criteria -> compare('password', $this -> password, true);
		//$criteria -> compare('salt', $this -> salt, true);
		$criteria -> compare('remember_me', $this -> remember_me);
		$criteria -> compare('created_at', $this -> created_at, true);
		$criteria -> compare('updated_at', $this -> updated_at, true);

		return new CActiveDataProvider($this, array('criteria' => $criteria, ));
	}

}
