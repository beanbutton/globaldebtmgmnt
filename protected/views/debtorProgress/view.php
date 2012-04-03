<?php
$this->breadcrumbs=array(
	'Debtor Progresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorProgress', 'url'=>array('index')),
	array('label'=>'Create DebtorProgress', 'url'=>array('create')),
	array('label'=>'Update DebtorProgress', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorProgress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorProgress', 'url'=>array('admin')),
);
?>

<h1>View DebtorProgress #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'status',
		'current_settlement_offer',
		'current_settlement_perc',
		'offer_date',
		'offer_valid_until_date',
		'type_of_debt',
		'total_debt',
		'days_behind',
		'settlement_date',
		'settlement_amount',
		'savings',
		'created_at',
		'updated_at',
	),
)); ?>
