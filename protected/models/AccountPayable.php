<?php

/**
 * This is the model class for table "tbl_account_payable".
 *
 * The followings are the available columns in table 'tbl_account_payable':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property string $invoice_number
 * @property string $invoice_date
 * @property double $invoice_amount
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblUser $fkUser
 */
class AccountPayable extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return AccountPayable the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_account_payable';
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
        //array('created_at, updated_at', 'required'), 
        array('Fk_user_id', 'numerical', 'integerOnly' => true), 
        array('invoice_amount', 'numerical'), array('invoice_number, description', 'length', 'max' => 255), array('invoice_date', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_user_id, invoice_number, invoice_date, invoice_amount, description, created_at, updated_at', 'safe', 'on' => 'search'), );
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
        return array('id' => 'ID', 'Fk_user_id' => 'Fk User', 'invoice_number' => 'Invoice Number', 'invoice_date' => 'Invoice Date', 'invoice_amount' => 'Invoice Amount', 'description' => 'Description', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
        $criteria -> compare('invoice_number', $this -> invoice_number, true);
        $criteria -> compare('invoice_date', $this -> invoice_date, true);
        $criteria -> compare('invoice_amount', $this -> invoice_amount);
        $criteria -> compare('description', $this -> description, true);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updated_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
