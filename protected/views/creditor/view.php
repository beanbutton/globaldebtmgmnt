<?php
$this->breadcrumbs=array(
	'Creditors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Creditor', 'url'=>array('index')),
	array('label'=>'Create Creditor', 'url'=>array('create')),
	array('label'=>'Update Creditor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Creditor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Creditor', 'url'=>array('admin')),
);
?>

<h1>View Creditor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_user_id',
		'Fk_debtor_id',
		'badge_number',
		'name',
		'address',
		'telephone1',
		'telephone1_ext',
		'telephone2',
		'telephone2_ext',
		'email',
		'faxnumber',
		'comments',
		'created_at',
		'updated_at',
		'postal_code',
	),
)); ?>
