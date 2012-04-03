<?php
$this->breadcrumbs=array(
	'Debtor Budget Infos',
);

$this->menu=array(
	array('label'=>'Create DebtorBudgetInfo', 'url'=>array('create')),
	array('label'=>'Manage DebtorBudgetInfo', 'url'=>array('admin')),
);
?>

<h1>Debtor Budget Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
