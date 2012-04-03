<?php
$this->breadcrumbs=array(
	'Account Payables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountPayable', 'url'=>array('index')),
	array('label'=>'Create AccountPayable', 'url'=>array('create')),
	array('label'=>'Update AccountPayable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountPayable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountPayable', 'url'=>array('admin')),
);
?>

<h1>View AccountPayable #<?php echo $model->id; ?></h1>

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
