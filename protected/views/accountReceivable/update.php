<?php
$this->breadcrumbs=array(
	'Account Receivables'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountReceivable', 'url'=>array('index')),
	array('label'=>'Create AccountReceivable', 'url'=>array('create')),
	array('label'=>'View AccountReceivable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountReceivable', 'url'=>array('admin')),
);
?>

<h1>Update AccountReceivable <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>