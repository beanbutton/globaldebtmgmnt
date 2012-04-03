<?php
$this->breadcrumbs=array(
	'Amortizations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Amortization', 'url'=>array('index')),
	array('label'=>'Create Amortization', 'url'=>array('create')),
	array('label'=>'View Amortization', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Amortization', 'url'=>array('admin')),
);
?>

<h1>Update Amortization <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>