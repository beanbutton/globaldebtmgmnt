<?php
$this->breadcrumbs=array(
	'Debtors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Debtor', 'url'=>array('index')),
	array('label'=>'Manage Debtor', 'url'=>array('admin')),
);
?>

<h1>Create Debtor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>