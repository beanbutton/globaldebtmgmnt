<?php

/**
 * This is the model class for table "tbl_settlement_offer_summary".
 *
 * The followings are the available columns in table 'tbl_settlement_offer_summary':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property double $total_debt
 * @property integer $months_to_repay
 * @property double $interest_rate
 * @property double $extra_interest_paid
 * @property double $ave_settlement
 * @property double $total_cost
 * @property double $savings_our_program
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property TblSettlementOffer $fkSettlementoffer
 */
class SettlementOfferSummary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SettlementOfferSummary the static model class
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
		return 'tbl_settlement_offer_summary';
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
			array('Fk_debtor_id, months_to_repay', 'numerical', 'integerOnly'=>true),
			array('total_debt, interest_rate, extra_interest_paid, ave_settlement, total_cost, savings_our_program', 'numerical'),
			array('comments', 'length', 'max'=>255),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_debtor_id, total_debt, months_to_repay, interest_rate, extra_interest_paid, ave_settlement, total_cost, savings_our_program, comments, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.

        return array('fkDebtor' => array(self::BELONGS_TO, 'TblDebtor', 'Fk_debtor_id'), );
	
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Fk_debtor_id' => 'Fk Debtor',
			'total_debt' => 'Total Debt',
			'months_to_repay' => 'Months To Repay',
			'interest_rate' => 'Interest Rate',
			'extra_interest_paid' => 'Extra Interest Paid',
			'ave_settlement' => 'Ave Settlement',
			'total_cost' => 'Total Cost',
			'savings_our_program' => 'Savings Our Program',
			'comments' => 'Comments',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
        $criteria -> compare('Fk_debtor_id', $this -> Fk_debtor_id);
		$criteria->compare('total_debt',$this->total_debt);
		$criteria->compare('months_to_repay',$this->months_to_repay);
		$criteria->compare('interest_rate',$this->interest_rate);
		$criteria->compare('extra_interest_paid',$this->extra_interest_paid);
		$criteria->compare('ave_settlement',$this->ave_settlement);
		$criteria->compare('total_cost',$this->total_cost);
		$criteria->compare('savings_our_program',$this->savings_our_program);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}