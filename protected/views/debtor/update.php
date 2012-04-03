<?php
$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Debtor', 'url'=>array('index')),
	array('label'=>'Create Debtor', 'url'=>array('create')),
	array('label'=>'View Debtor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Debtor', 'url'=>array('admin')),
);
?>

<h1>Update Debtor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>