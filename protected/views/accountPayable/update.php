<?php
$this->breadcrumbs=array(
	'Account Payables'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountPayable', 'url'=>array('index')),
	array('label'=>'Create AccountPayable', 'url'=>array('create')),
	array('label'=>'View AccountPayable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountPayable', 'url'=>array('admin')),
);
?>

<h1>Update AccountPayable <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>