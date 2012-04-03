<?php
$this->breadcrumbs=array(
	'Negotiators'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Negotiator', 'url'=>array('index')),
	array('label'=>'Create Negotiator', 'url'=>array('create')),
	array('label'=>'View Negotiator', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Negotiator', 'url'=>array('admin')),
);
?>

<h1>Update Negotiator <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>