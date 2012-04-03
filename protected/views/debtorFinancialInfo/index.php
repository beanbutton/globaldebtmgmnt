<?php
$this->breadcrumbs=array(
	'Debtor Financial Infos',
);

$this->menu=array(
	array('label'=>'Create DebtorFinancialInfo', 'url'=>array('create')),
	array('label'=>'Manage DebtorFinancialInfo', 'url'=>array('admin')),
);
?>

<h1>Debtor Financial Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
