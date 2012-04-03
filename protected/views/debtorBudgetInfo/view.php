<?php
$this->breadcrumbs=array(
	'Debtor Budget Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorBudgetInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorBudgetInfo', 'url'=>array('create')),
	array('label'=>'Update DebtorBudgetInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorBudgetInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorBudgetInfo', 'url'=>array('admin')),
);
?>

<h1>View DebtorBudgetInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'monthly_income',
		'monthly_auto_expenses',
		'car_payment1',
		'car_payment2',
		'recreational_vehicle',
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
	),
)); ?>
