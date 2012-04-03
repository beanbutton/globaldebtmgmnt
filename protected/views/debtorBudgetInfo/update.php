<?php
$this->breadcrumbs=array(
	'Debtor Budget Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorBudgetInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorBudgetInfo', 'url'=>array('create')),
	array('label'=>'View DebtorBudgetInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorBudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Update DebtorBudgetInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>