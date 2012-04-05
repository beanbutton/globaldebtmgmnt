<?php
$this->breadcrumbs=array(
	'Amortizations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Amortization', 'url'=>array('index')),
	array('label'=>'Create Amortization', 'url'=>array('create')),
	array('label'=>'Update Amortization', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Amortization', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Amortization', 'url'=>array('admin')),
);
?>

<h1>View Amortization #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'payment_start_date',
		'payment_end_date',
		'payment_period',
		'total_monthly_cost',
		'adminstration_fee',
		'maintenance_fee',
		'settlement_savings_fund',
		'total_monthly_cost_total',
		'total_adminstration_fee',
		'total_maintenance_fee',
		'total_settlement_savings_fund',
	),
)); ?>
