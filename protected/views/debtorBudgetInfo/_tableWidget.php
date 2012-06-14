
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-budget-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'Fk_debtor_id',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->Fk_debtor_id), 
            	array( "debtorOverview/view", 
            	"id" => $data->Fk_debtor_id)
				)',
		),
		'monthly_income',
		'monthly_auto_expenses',
		'car_payment1',
		'car_payment2',
		'recreational_vehicle',
		/*
		'monthly_auto_payments',
		'monthly_utilites',
		'monthly_grocery_expenses',
		'monthly_insurance_payments',
		'rrsp',
		'gas_and_electricuty',
		'telephone',
		'water_trash_sewer',
		'cable_and_internet_services',
		'food_stamp_or_other',
		'spouse_monthly_takehome_pay',
		'reason_for_hardship',
		'estimated_home_value',
		'remaining_mortgage_balance',
		'total_number_dependants',
		'household_expenses',
		'total_debt_to_income_perc',
		'total_expenses_to_income_variance',
		'mortgage',
		'rent',
		'created_at',
		'updated_at',
		'Fk_debtor_id',
		'gross_monthly_income',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
