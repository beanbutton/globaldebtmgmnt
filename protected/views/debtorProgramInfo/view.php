<?php
$this->breadcrumbs=array(
	'Debtor Program Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorProgramInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorProgramInfo', 'url'=>array('create')),
	array('label'=>'Update DebtorProgramInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorProgramInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorProgramInfo', 'url'=>array('admin')),
);
?>

<h1>View DebtorProgramInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'program_type',
		'monthly_payment',
		'type_of_debt',
		'total_debt',
		'original_debt',
		'monthly_income',
		'saf_monthly_payment',
		'nsf_amount',
		'monthly_payment_due_date',
		'enrollment_date',
		'first_monthly_payment_date',
		'next_payment_due_date',
		'contract_due_date',
		'maintenance_fee_manual',
		'maintenance_fee_automatic',
		'admin_fee_automatic',
		'admin_fee_percentage_automatic',
		'admin_fee_manual',
		'admin_fee_percentage_manual',
		'service_fee_automatic',
		'service_fee_percentage_automatic',
		'service_fee_manual',
		'service_fee_percentage_manual',
		'savings_amount',
		'savings_percentage',
		'created_at',
		'updated_at',
	),
)); ?>
