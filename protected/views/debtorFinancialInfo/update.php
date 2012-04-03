<?php
$this->breadcrumbs=array(
	'Debtor Financial Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorFinancialInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorFinancialInfo', 'url'=>array('create')),
	array('label'=>'View DebtorFinancialInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorFinancialInfo', 'url'=>array('admin')),
);
?>

<h1>Update DebtorFinancialInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>