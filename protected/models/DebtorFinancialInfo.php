<?php

/**
 * This is the model class for table "tbl_debtor_financial_info".
 *
 * The followings are the available columns in table 'tbl_debtor_financial_info':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property string $name_financial_institution
 * @property string $branch_address
 * @property string $city
 * @property string $province
 * @property string $postal_code
 * @property string $phone_number
 * @property string $institution_numer
 * @property string $branch_number
 * @property string $account_number
 * @property string $created_at
 * @property string $updated_at
 */
class DebtorFinancialInfo extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return DebtorFinancialInfo the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_debtor_financial_info';
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
        //array('created_at', 'required'), 
        array('Fk_debtor_id', 'numerical', 'integerOnly' => true), 
        array('name_financial_institution, branch_address, city, province, postal_code, phone_number, institution_numer, branch_number, account_number', 'length', 'max' => 255), array('updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_debtor_id, name_financial_institution, branch_address, city, province, postal_code, phone_number, institution_numer, branch_number, account_number, created_at, updated_at', 'safe', 'on' => 'search'), );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array('id' => 'ID', 'Fk_debtor_id' => 'Fk Debtor', 'name_financial_institution' => 'Name Financial Institution', 'branch_address' => 'Branch Address', 'city' => 'City', 'province' => 'Province', 'postal_code' => 'Postal Code', 'phone_number' => 'Phone Number', 'institution_numer' => 'Institution Numer', 'branch_number' => 'Branch Number', 'account_number' => 'Account Number', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
        $criteria -> compare('Fk_debtor_id', $this -> Fk_debtor_id);
        $criteria -> compare('name_financial_institution', $this -> name_financial_institution, true);
        $criteria -> compare('branch_address', $this -> branch_address, true);
        $criteria -> compare('city', $this -> city, true);
        $criteria -> compare('province', $this -> province, true);
        $criteria -> compare('postal_code', $this -> postal_code, true);
        $criteria -> compare('phone_number', $this -> phone_number, true);
        $criteria -> compare('institution_numer', $this -> institution_numer, true);
        $criteria -> compare('branch_number', $this -> branch_number, true);
        $criteria -> compare('account_number', $this -> account_number, true);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updated_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
