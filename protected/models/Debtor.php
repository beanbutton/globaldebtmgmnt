<?php

/**
 * This is the model class for table "tbl_debtor".
 *
 * The followings are the available columns in table 'tbl_debtor':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property string $file_number
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $drivers_licence
 * @property string $date_of_birth
 * @property string $social_insurance_number
 * @property string $date_filed_chapter7
 * @property string $date_filed_chapter13
 * @property string $home_telephone
 * @property string $mobile_telephone
 * @property string $other_telephone
 * @property string $best_time_to_call
 * @property string $faxnumber
 * @property string $email
 * @property integer $employment_status
 * @property string $employer
 * @property string $employment_occupation
 * @property integer $employment_work_years
 * @property string $employment_telephone
 * @property integer $employment_insurance
 * @property integer $employment_disability
 * @property integer $employee_pension
 * @property integer $correspondence_language
 * @property string $comments
 * @property string $spouse_firstname
 * @property string $spouse_lastname
 * @property string $spouse_address
 * @property integer $spouse_marital_status
 * @property double $spouse_monthly_income
 * @property double $spouse_gross_monthly_income
 * @property integer $spouse_employment_status
 * @property string $spouse_employer
 * @property string $spouse_employment_occupation
 * @property integer $spouse_employment_work_years
 * @property integer $spouse_number_of_children
 * @property string $spouse_drivers_licence
 * @property integer $spouse_active_duty
 * @property string $spouse_comments
 * @property string $created_at
 * @property string $updated_at
 * @property string $postal_code
 * @property string $credit_card_number
 * @property string $pension
 *
 * The followings are the available model relations:
 * @property TblAmortization[] $tblAmortizations
 * @property TblCreditor[] $tblCreditors
 * @property TblUser $fkUser
 * @property TblDebtorBudgetInfo[] $tblDebtorBudgetInfos
 * @property TblDebtorFinancialInfo[] $tblDebtorFinancialInfos
 * @property TblDebtorProgramInfo[] $tblDebtorProgramInfos
 * @property TblDebtorProgress[] $tblDebtorProgresses
 * @property TblNegotiator[] $tblNegotiators
 * @property TblSettlementOffer[] $tblSettlementOffers
 */
class Debtor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Debtor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	/**
	 * Retrieves the debtors full name
	 */
	public function getFullname()
	{
		return $this->firstname." ".$this->lastname;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_debtor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('created_at, updated_at', 'required'),
			array('Fk_user_id, employment_status, employment_work_years, employment_insurance, employment_disability, employee_pension, correspondence_language, spouse_marital_status, spouse_employment_status, spouse_employment_work_years, spouse_number_of_children, spouse_active_duty', 'numerical', 'integerOnly'=>true),
			array('spouse_monthly_income, spouse_gross_monthly_income', 'numerical'),
			array('file_number, firstname, lastname, address, drivers_licence, social_insurance_number, home_telephone, mobile_telephone, other_telephone, best_time_to_call, faxnumber, email, employer, employment_occupation, employment_telephone, comments, spouse_firstname, spouse_lastname, spouse_address, spouse_employer, spouse_employment_occupation, spouse_drivers_licence, spouse_comments, postal_code, credit_card_number, pension', 'length', 'max'=>255),
			array('date_of_birth, date_filed_chapter7, date_filed_chapter13', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_user_id, file_number, firstname, lastname, address, drivers_licence, date_of_birth, social_insurance_number, date_filed_chapter7, date_filed_chapter13, home_telephone, mobile_telephone, other_telephone, best_time_to_call, faxnumber, email, employment_status, employer, employment_occupation, employment_work_years, employment_telephone, employment_insurance, employment_disability, employee_pension, correspondence_language, comments, spouse_firstname, spouse_lastname, spouse_address, spouse_marital_status, spouse_monthly_income, spouse_gross_monthly_income, spouse_employment_status, spouse_employer, spouse_employment_occupation, spouse_employment_work_years, spouse_number_of_children, spouse_drivers_licence, spouse_active_duty, spouse_comments, created_at, updated_at, postal_code, credit_card_number, pension', 'safe', 'on'=>'search'),
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
			'tblAmortizations' => array(self::HAS_MANY, 'TblAmortization', 'Fk_debtor_id'),
			'tblCreditors' => array(self::HAS_MANY, 'TblCreditor', 'Fk_debtor_id'),
			'fkUser' => array(self::BELONGS_TO, 'TblUser', 'Fk_user_id'),
			'tblDebtorBudgetInfos' => array(self::HAS_MANY, 'TblDebtorBudgetInfo', 'Fk_debtor_id'),
			'tblDebtorFinancialInfos' => array(self::HAS_MANY, 'TblDebtorFinancialInfo', 'Fk_debtor_id'),
			'tblDebtorProgramInfos' => array(self::HAS_MANY, 'TblDebtorProgramInfo', 'Fk_debtor_id'),
			'tblDebtorProgresses' => array(self::HAS_MANY, 'TblDebtorProgress', 'Fk_debtor_id'),
			'tblNegotiators' => array(self::HAS_MANY, 'TblNegotiator', 'Fk_debtor_id'),
			'tblSettlementOffers' => array(self::HAS_MANY, 'TblSettlementOffer', 'Fk_debtor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Fk_user_id' => 'Fk User',
			'file_number' => 'File Number',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'address' => 'Address',
			'drivers_licence' => 'Drivers Licence',
			'date_of_birth' => 'Date Of Birth',
			'social_insurance_number' => 'Social Insurance Number',
			'date_filed_chapter7' => 'Date Filed Chapter7',
			'date_filed_chapter13' => 'Date Filed Chapter13',
			'home_telephone' => 'Home Telephone',
			'mobile_telephone' => 'Mobile Telephone',
			'other_telephone' => 'Other Telephone',
			'best_time_to_call' => 'Best Time To Call',
			'faxnumber' => 'Faxnumber',
			'email' => 'Email',
			'employment_status' => 'Employment Status',
			'employer' => 'Employer',
			'employment_occupation' => 'Employment Occupation',
			'employment_work_years' => 'Employment Work Years',
			'employment_telephone' => 'Employment Telephone',
			'employment_insurance' => 'Employment Insurance',
			'employment_disability' => 'Employment Disability',
			'employee_pension' => 'Employee Pension',
			'correspondence_language' => 'Correspondence Language',
			'comments' => 'Comments',
			'spouse_firstname' => 'Spouse Firstname',
			'spouse_lastname' => 'Spouse Lastname',
			'spouse_address' => 'Spouse Address',
			'spouse_marital_status' => 'Spouse Marital Status',
			'spouse_monthly_income' => 'Spouse Monthly Income',
			'spouse_gross_monthly_income' => 'Spouse Gross Monthly Income',
			'spouse_employment_status' => 'Spouse Employment Status',
			'spouse_employer' => 'Spouse Employer',
			'spouse_employment_occupation' => 'Spouse Employment Occupation',
			'spouse_employment_work_years' => 'Spouse Employment Work Years',
			'spouse_number_of_children' => 'Spouse Number Of Children',
			'spouse_drivers_licence' => 'Spouse Drivers Licence',
			'spouse_active_duty' => 'Spouse Active Duty',
			'spouse_comments' => 'Spouse Comments',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'postal_code' => 'Postal Code',
			'credit_card_number' => 'Credit Card Number',
			'pension' => 'Pension',
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
		$criteria->compare('Fk_user_id',$this->Fk_user_id);
		$criteria->compare('file_number',$this->file_number,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('drivers_licence',$this->drivers_licence,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('social_insurance_number',$this->social_insurance_number,true);
		$criteria->compare('date_filed_chapter7',$this->date_filed_chapter7,true);
		$criteria->compare('date_filed_chapter13',$this->date_filed_chapter13,true);
		$criteria->compare('home_telephone',$this->home_telephone,true);
		$criteria->compare('mobile_telephone',$this->mobile_telephone,true);
		$criteria->compare('other_telephone',$this->other_telephone,true);
		$criteria->compare('best_time_to_call',$this->best_time_to_call,true);
		$criteria->compare('faxnumber',$this->faxnumber,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('employment_status',$this->employment_status);
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('employment_occupation',$this->employment_occupation,true);
		$criteria->compare('employment_work_years',$this->employment_work_years);
		$criteria->compare('employment_telephone',$this->employment_telephone,true);
		$criteria->compare('employment_insurance',$this->employment_insurance);
		$criteria->compare('employment_disability',$this->employment_disability);
		$criteria->compare('employee_pension',$this->employee_pension);
		$criteria->compare('correspondence_language',$this->correspondence_language);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('spouse_firstname',$this->spouse_firstname,true);
		$criteria->compare('spouse_lastname',$this->spouse_lastname,true);
		$criteria->compare('spouse_address',$this->spouse_address,true);
		$criteria->compare('spouse_marital_status',$this->spouse_marital_status);
		$criteria->compare('spouse_monthly_income',$this->spouse_monthly_income);
		$criteria->compare('spouse_gross_monthly_income',$this->spouse_gross_monthly_income);
		$criteria->compare('spouse_employment_status',$this->spouse_employment_status);
		$criteria->compare('spouse_employer',$this->spouse_employer,true);
		$criteria->compare('spouse_employment_occupation',$this->spouse_employment_occupation,true);
		$criteria->compare('spouse_employment_work_years',$this->spouse_employment_work_years);
		$criteria->compare('spouse_number_of_children',$this->spouse_number_of_children);
		$criteria->compare('spouse_drivers_licence',$this->spouse_drivers_licence,true);
		$criteria->compare('spouse_active_duty',$this->spouse_active_duty);
		$criteria->compare('spouse_comments',$this->spouse_comments,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('credit_card_number',$this->credit_card_number,true);
		$criteria->compare('pension',$this->pension,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}