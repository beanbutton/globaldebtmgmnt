<?php
$this->breadcrumbs=array(
	'Debtor Financial Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorFinancialInfo', 'url'=>array('index')),
	array('label'=>'Manage DebtorFinancialInfo', 'url'=>array('admin')),
);
?>

<h1>Create DebtorFinancialInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>