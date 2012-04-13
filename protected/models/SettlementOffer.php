<?php

/**
 * This is the model class for table "tbl_settlement_offer".
 *
 * The followings are the available columns in table 'tbl_settlement_offer':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property string $file_number
 * @property string $offer_date
 * @property double $offer_amount
 * @property double $offer_amount_percentage
 * @property double $client_saving_amonut
 * @property double $client_savings_percentage
 * @property double $client_reserves
 * @property double $service_fees
 * @property double $difference_amount
 * @property integer $offer_status
 * @property string $valid_date
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblDebtor $fkDebtor
 */
class SettlementOffer extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return SettlementOffer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_settlement_offer';
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
        array('Fk_debtor_id', 'required'), 
        array('Fk_debtor_id, offer_status', 'numerical', 'integerOnly' => true), 
        array('offer_amount, offer_amount_percentage, client_saving_amonut, client_savings_percentage, client_reserves, service_fees, difference_amount', 'numerical'), 
        array('file_number, comments', 'length', 'max' => 255), 
        array('offer_date, valid_date, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_debtor_id, file_number, offer_date, offer_amount, offer_amount_percentage, client_saving_amonut, client_savings_percentage, client_reserves, service_fees, difference_amount, offer_status, valid_date, comments, created_at, updated_at', 'safe', 'on' => 'search'), );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('fkDebtor' => array(self::BELONGS_TO, 'TblDebtor', 'Fk_debtor_id'), );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array('id' => 'ID', 'Fk_debtor_id' => 'Fk Debtor', 'file_number' => 'File Number', 'offer_date' => 'Offer Date', 'offer_amount' => 'Offer Amount', 'offer_amount_percentage' => 'Offer Amount Percentage', 'client_saving_amonut' => 'Client Saving Amonut', 'client_savings_percentage' => 'Client Savings Percentage', 'client_reserves' => 'Client Reserves', 'service_fees' => 'Service Fees', 'difference_amount' => 'Difference Amount', 'offer_status' => 'Offer Status', 'valid_date' => 'Valid Date', 'comments' => 'Comments', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
        $criteria -> compare('file_number', $this -> file_number, true);
        $criteria -> compare('offer_date', $this -> offer_date, true);
        $criteria -> compare('offer_amount', $this -> offer_amount);
        $criteria -> compare('offer_amount_percentage', $this -> offer_amount_percentage);
        $criteria -> compare('client_saving_amonut', $this -> client_saving_amonut);
        $criteria -> compare('client_savings_percentage', $this -> client_savings_percentage);
        $criteria -> compare('client_reserves', $this -> client_reserves);
        $criteria -> compare('service_fees', $this -> service_fees);
        $criteria -> compare('difference_amount', $this -> difference_amount);
        $criteria -> compare('offer_status', $this -> offer_status);
        $criteria -> compare('valid_date', $this -> valid_date, true);
        $criteria -> compare('comments', $this -> comments, true);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updated_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
