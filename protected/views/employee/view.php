<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_user_id',
		'firstname',
		'lastname',
		'phone_number',
		'address',
		'city',
		'postal_code',
		'email',
		'emergency_contact',
		'emergency_phone_number',
		'created_at',
		'updated_at',
	),
)); ?>
