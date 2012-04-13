<?php

/**
 * This is the model class for table "tbl_debtor_program_info".
 *
 * The followings are the available columns in table 'tbl_debtor_program_info':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property integer                    
 * @property double $monthly_payment
 * @property string $type_of_debt
 * @property double $total_debt
 * @property double $original_debt
 * @property double $monthly_income
 * @property double $saf_monthly_payment
 * @property double $nsf_amount
 * @property string $monthly_payment_due_date
 * @property string $enrollment_date
 * @property string $first_monthly_payment_date
 * @property string $next_payment_due_date
 * @property string $contract_due_date
 * @property double $maintenance_fee_manual
 * @property double $maintenance_fee_automatic
 * @property double $admin_fee_automatic
 * @property double $admin_fee_percentage_automatic
 * @property double $admin_fee_manual
 * @property double $admin_fee_percentage_manual
 * @property double $service_fee_automatic
 * @property double $service_fee_percentage_automatic
 * @property double $service_fee_manual
 * @property double $service_fee_percentage_manual
 * @property double $savings_amount
 * @property double $savings_percentage
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblDebtor $fkDebtor
 */
class DebtorProgramInfo extends CActiveRecord {
    /**
     * Returns the static model of the specified AR class.
     * @return DebtorProgramInfo the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tbl_debtor_program_info';
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
        array('Fk_debtor_id, program_type', 'numerical', 'integerOnly' => true), 
        array('monthly_payment, total_debt, original_debt, monthly_income, saf_monthly_payment, nsf_amount, maintenance_fee_manual, maintenance_fee_automatic, admin_fee_automatic, admin_fee_percentage_automatic, admin_fee_manual, admin_fee_percentage_manual, service_fee_automatic, service_fee_percentage_automatic, service_fee_manual, service_fee_percentage_manual, savings_amount, savings_percentage', 'numerical'), array('type_of_debt', 'length', 'max' => 255), array('monthly_payment_due_date, enrollment_date, first_monthly_payment_date, next_payment_due_date, contract_due_date, updated_at', 'safe'),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, Fk_debtor_id, program_type, monthly_payment, type_of_debt, total_debt, original_debt, monthly_income, saf_monthly_payment, nsf_amount, monthly_payment_due_date, enrollment_date, first_monthly_payment_date, next_payment_due_date, contract_due_date, maintenance_fee_manual, maintenance_fee_automatic, admin_fee_automatic, admin_fee_percentage_automatic, admin_fee_manual, admin_fee_percentage_manual, service_fee_automatic, service_fee_percentage_automatic, service_fee_manual, service_fee_percentage_manual, savings_amount, savings_percentage, created_at, updated_at', 'safe', 'on' => 'search'), );
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
        return array('id' => 'ID', 'Fk_debtor_id' => 'Fk Debtor', 'program_type' => 'Program Type', 'monthly_payment' => 'Monthly Payment', 'type_of_debt' => 'Type Of Debt', 'total_debt' => 'Total Debt', 'original_debt' => 'Original Debt', 'monthly_income' => 'Monthly Income', 'saf_monthly_payment' => 'Saf Monthly Payment', 'nsf_amount' => 'Nsf Amount', 'monthly_payment_due_date' => 'Monthly Payment Due Date', 'enrollment_date' => 'Enrollment Date', 'first_monthly_payment_date' => 'First Monthly Payment Date', 'next_payment_due_date' => 'Next Payment Due Date', 'contract_due_date' => 'Contract Due Date', 'maintenance_fee_manual' => 'Maintenance Fee Manual', 'maintenance_fee_automatic' => 'Maintenance Fee Automatic', 'admin_fee_automatic' => 'Admin Fee Automatic', 'admin_fee_percentage_automatic' => 'Admin Fee Percentage Automatic', 'admin_fee_manual' => 'Admin Fee Manual', 'admin_fee_percentage_manual' => 'Admin Fee Percentage Manual', 'service_fee_automatic' => 'Service Fee Automatic', 'service_fee_percentage_automatic' => 'Service Fee Percentage Automatic', 'service_fee_manual' => 'Service Fee Manual', 'service_fee_percentage_manual' => 'Service Fee Percentage Manual', 'savings_amount' => 'Savings Amount', 'savings_percentage' => 'Savings Percentage', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
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
        $criteria -> compare('program_type', $this -> program_type);
        $criteria -> compare('monthly_payment', $this -> monthly_payment);
        $criteria -> compare('type_of_debt', $this -> type_of_debt, true);
        $criteria -> compare('total_debt', $this -> total_debt);
        $criteria -> compare('original_debt', $this -> original_debt);
        $criteria -> compare('monthly_income', $this -> monthly_income);
        $criteria -> compare('saf_monthly_payment', $this -> saf_monthly_payment);
        $criteria -> compare('nsf_amount', $this -> nsf_amount);
        $criteria -> compare('monthly_payment_due_date', $this -> monthly_payment_due_date, true);
        $criteria -> compare('enrollment_date', $this -> enrollment_date, true);
        $criteria -> compare('first_monthly_payment_date', $this -> first_monthly_payment_date, true);
        $criteria -> compare('next_payment_due_date', $this -> next_payment_due_date, true);
        $criteria -> compare('contract_due_date', $this -> contract_due_date, true);
        $criteria -> compare('maintenance_fee_manual', $this -> maintenance_fee_manual);
        $criteria -> compare('maintenance_fee_automatic', $this -> maintenance_fee_automatic);
        $criteria -> compare('admin_fee_automatic', $this -> admin_fee_automatic);
        $criteria -> compare('admin_fee_percentage_automatic', $this -> admin_fee_percentage_automatic);
        $criteria -> compare('admin_fee_manual', $this -> admin_fee_manual);
        $criteria -> compare('admin_fee_percentage_manual', $this -> admin_fee_percentage_manual);
        $criteria -> compare('service_fee_automatic', $this -> service_fee_automatic);
        $criteria -> compare('service_fee_percentage_automatic', $this -> service_fee_percentage_automatic);
        $criteria -> compare('service_fee_manual', $this -> service_fee_manual);
        $criteria -> compare('service_fee_percentage_manual', $this -> service_fee_percentage_manual);
        $criteria -> compare('savings_amount', $this -> savings_amount);
        $criteria -> compare('savings_percentage', $this -> savings_percentage);
        $criteria -> compare('created_at', $this -> created_at, true);
        $criteria -> compare('updated_at', $this -> updated_at, true);

        return new CActiveDataProvider($this, array('criteria' => $criteria, ));
    }

}
