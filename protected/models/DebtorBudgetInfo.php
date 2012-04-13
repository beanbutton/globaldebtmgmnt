<?php

/**
 * This is the model class for table "tbl_debtor_budget_info".
 *
 * The followings are the available columns in table 'tbl_debtor_budget_info':
 * @property integer $id
 * @property double $monthly_income
 * @property double $monthly_auto_expenses
 * @property double $car_payment1
 * @property double $car_payment2
 * @property double $recreational_vehicle
 * @property double $monthly_auto_payments
 * @property double $monthly_utilites
 * @property double $monthly_grocery_expenses
 * @property double $monthly_insurance_payments
 * @property double $rrsp
 * @property double $gas_and_electricuty
 * @property double $telephone
 * @property double $water_trash_sewer
 * @property double $cable_and_internet_services
 * @property double $food_stamp_or_other
 * @property double $spouse_monthly_takehome_pay
 * @property string $reason_for_hardship
 * @property double $estimated_home_value
 * @property double $remaining_mortgage_balance
 * @property integer $total_number_dependants
 * @property double $household_expenses
 * @property double $total_debt_to_income_perc
 * @property double $total_expenses_to_income_variance
 * @property double $mortgage
 * @property double $rent
 * @property string $created_at
 * @property string $updated_at
 * @property integer $Fk_debtor_id
 * @property double $gross_monthly_income
 *
 * The followings are the available model relations:
 * @property TblDebtor $fkDebtor
 */
class DebtorBudgetInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DebtorBudgetInfo the static model class
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
		return 'tbl_debtor_budget_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fk_debtor_id', 'required'),
			array('total_number_dependants, Fk_debtor_id', 'numerical', 'integerOnly'=>true),
			array('monthly_income, monthly_auto_expenses, car_payment1, car_payment2, recreational_vehicle, monthly_auto_payments, monthly_utilites, monthly_grocery_expenses, monthly_insurance_payments, rrsp, gas_and_electricuty, telephone, water_trash_sewer, cable_and_internet_services, food_stamp_or_other, spouse_monthly_takehome_pay, estimated_home_value, remaining_mortgage_balance, household_expenses, total_debt_to_income_perc, total_expenses_to_income_variance, mortgage, rent, gross_monthly_income', 'numerical'),
			array('reason_for_hardship', 'length', 'max'=>255),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, monthly_income, monthly_auto_expenses, car_payment1, car_payment2, recreational_vehicle, monthly_auto_payments, monthly_utilites, monthly_grocery_expenses, monthly_insurance_payments, rrsp, gas_and_electricuty, telephone, water_trash_sewer, cable_and_internet_services, food_stamp_or_other, spouse_monthly_takehome_pay, reason_for_hardship, estimated_home_value, remaining_mortgage_balance, total_number_dependants, household_expenses, total_debt_to_income_perc, total_expenses_to_income_variance, mortgage, rent, created_at, updated_at, Fk_debtor_id, gross_monthly_income', 'safe', 'on'=>'search'),
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
			'fkDebtor' => array(self::BELONGS_TO, 'TblDebtor', 'Fk_debtor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'monthly_income' => 'Monthly Income',
			'monthly_auto_expenses' => 'Monthly Auto Expenses',
			'car_payment1' => 'Car Payment1',
			'car_payment2' => 'Car Payment2',
			'recreational_vehicle' => 'Recreational Vehicle',
			'monthly_auto_payments' => 'Monthly Auto Payments',
			'monthly_utilites' => 'Monthly Utilites',
			'monthly_grocery_expenses' => 'Monthly Grocery Expenses',
			'monthly_insurance_payments' => 'Monthly Insurance Payments',
			'rrsp' => 'Rrsp',
			'gas_and_electricuty' => 'Gas And Electricuty',
			'telephone' => 'Telephone',
			'water_trash_sewer' => 'Water Trash Sewer',
			'cable_and_internet_services' => 'Cable And Internet Services',
			'food_stamp_or_other' => 'Food Stamp Or Other',
			'spouse_monthly_takehome_pay' => 'Spouse Monthly Takehome Pay',
			'reason_for_hardship' => 'Reason For Hardship',
			'estimated_home_value' => 'Estimated Home Value',
			'remaining_mortgage_balance' => 'Remaining Mortgage Balance',
			'total_number_dependants' => 'Total Number Dependants',
			'household_expenses' => 'Household Expenses',
			'total_debt_to_income_perc' => 'Total Debt To Income Perc',
			'total_expenses_to_income_variance' => 'Total Expenses To Income Variance',
			'mortgage' => 'Mortgage',
			'rent' => 'Rent',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'Fk_debtor_id' => 'Fk Debtor',
			'gross_monthly_income' => 'Gross Monthly Income',
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
		$criteria->compare('monthly_income',$this->monthly_income);
		$criteria->compare('monthly_auto_expenses',$this->monthly_auto_expenses);
		$criteria->compare('car_payment1',$this->car_payment1);
		$criteria->compare('car_payment2',$this->car_payment2);
		$criteria->compare('recreational_vehicle',$this->recreational_vehicle);
		$criteria->compare('monthly_auto_payments',$this->monthly_auto_payments);
		$criteria->compare('monthly_utilites',$this->monthly_utilites);
		$criteria->compare('monthly_grocery_expenses',$this->monthly_grocery_expenses);
		$criteria->compare('monthly_insurance_payments',$this->monthly_insurance_payments);
		$criteria->compare('rrsp',$this->rrsp);
		$criteria->compare('gas_and_electricuty',$this->gas_and_electricuty);
		$criteria->compare('telephone',$this->telephone);
		$criteria->compare('water_trash_sewer',$this->water_trash_sewer);
		$criteria->compare('cable_and_internet_services',$this->cable_and_internet_services);
		$criteria->compare('food_stamp_or_other',$this->food_stamp_or_other);
		$criteria->compare('spouse_monthly_takehome_pay',$this->spouse_monthly_takehome_pay);
		$criteria->compare('reason_for_hardship',$this->reason_for_hardship,true);
		$criteria->compare('estimated_home_value',$this->estimated_home_value);
		$criteria->compare('remaining_mortgage_balance',$this->remaining_mortgage_balance);
		$criteria->compare('total_number_dependants',$this->total_number_dependants);
		$criteria->compare('household_expenses',$this->household_expenses);
		$criteria->compare('total_debt_to_income_perc',$this->total_debt_to_income_perc);
		$criteria->compare('total_expenses_to_income_variance',$this->total_expenses_to_income_variance);
		$criteria->compare('mortgage',$this->mortgage);
		$criteria->compare('rent',$this->rent);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('Fk_debtor_id',$this->Fk_debtor_id);
		$criteria->compare('gross_monthly_income',$this->gross_monthly_income);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}