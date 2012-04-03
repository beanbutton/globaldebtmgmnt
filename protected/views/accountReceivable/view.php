<?php
$this->breadcrumbs=array(
	'Account Receivables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountReceivable', 'url'=>array('index')),
	array('label'=>'Create AccountReceivable', 'url'=>array('create')),
	array('label'=>'Update AccountReceivable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountReceivable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountReceivable', 'url'=>array('admin')),
);
?>

<h1>View AccountReceivable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_user_id',
		'invoice_number',
		'invoice_date',
		'invoice_amount',
		'description',
		'created_at',
		'updated_at',
	),
)); ?>
