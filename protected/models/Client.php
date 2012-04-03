<?php

/**
 * This is the model class for table "tbl_client".
 *
 * The followings are the available columns in table 'tbl_client':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property string $name
 * @property string $file_number
 * @property double $savings
 * @property string $assigned_to
 * @property string $negotiator
 * @property string $client_services
 * @property string $account_managers
 * @property double $total_debt
 * @property double $original_debt
 * @property string $enrollment_date
 * @property integer $status
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblUser $fkUser
 */
class Client extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return Client the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_client';
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
        return array( array('Fk_user_id, created_at', 'required'), array('Fk_user_id, status', 'numerical', 'integerOnly' => true), array('savings, total_debt, original_debt', 'numerical'), array('name, file_number, assigned_to, negotiator, client_services, account_managers, comments', 'length', 'max' => 255), array('enrollment_date, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_user_id, name, file_number, savings, assigned_to, negotiator, client_services, account_managers, total_debt, original_debt, enrollment_date, status, comments, created_at, updated_at', 'safe', 'on' => 'search'), );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('fkUser' => array(self::BELONGS_TO, 'TblUser', 'Fk_user_id'), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array('id' => 'ID', 'Fk_user_id' => 'Fk User', 'name' => 'Name', 'file_number' => 'File Number', 'savings' => 'Savings', 'assigned_to' => 'Assigned To', 'negotiator' => 'Negotiator', 'client_services' => 'Client Services', 'account_managers' => 'Account Managers', 'total_debt' => 'Total Debt', 'original_debt' => 'Original Debt', 'enrollment_date' => 'Enrollment Date', 'status' => 'Status', 'comments' => 'Comments', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
        $criteria -> compare('name', $this -> name, true);
        $criteria -> compare('file_number', $this -> file_number, true);
        $criteria -> compare('savings', $this -> savings);
        $criteria -> compare('assigned_to', $this -> assigned_to, true);
        $criteria -> compare('negotiator', $this -> negotiator, true);
        $criteria -> compare('client_services', $this -> client_services, true);
        $criteria -> compare('account_managers', $this -> account_managers, true);
        $criteria -> compare('total_debt', $this -> total_debt);
        $criteria -> compare('original_debt', $this -> original_debt);
        $criteria -> compare('enrollment_date', $this -> enrollment_date, true);
        $criteria -> compare('status', $this -> status);
        $criteria -> compare('comments', $this -> comments, true);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updated_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
