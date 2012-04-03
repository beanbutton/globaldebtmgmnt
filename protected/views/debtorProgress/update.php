<?php
$this->breadcrumbs=array(
	'Debtor Progresses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorProgress', 'url'=>array('index')),
	array('label'=>'Create DebtorProgress', 'url'=>array('create')),
	array('label'=>'View DebtorProgress', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorProgress', 'url'=>array('admin')),
);
?>

<h1>Update DebtorProgress <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>