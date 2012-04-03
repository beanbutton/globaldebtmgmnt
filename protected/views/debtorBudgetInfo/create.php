<?php
$this->breadcrumbs=array(
	'Debtor Budget Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorBudgetInfo', 'url'=>array('index')),
	array('label'=>'Manage DebtorBudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Create DebtorBudgetInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>