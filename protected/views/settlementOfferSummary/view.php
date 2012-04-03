<?php
$this->breadcrumbs=array(
	'Settlement Offer Summaries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SettlementOfferSummary', 'url'=>array('index')),
	array('label'=>'Create SettlementOfferSummary', 'url'=>array('create')),
	array('label'=>'Update SettlementOfferSummary', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SettlementOfferSummary', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SettlementOfferSummary', 'url'=>array('admin')),
);
?>

<h1>View SettlementOfferSummary #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'total_debt',
		'months_to_repay',
		'interest_rate',
		'extra_interest_paid',
		'ave_settlement',
		'total_cost',
		'savings_our_program',
		'comments',
		'created_at',
		'updated_at',
	),
)); ?>
