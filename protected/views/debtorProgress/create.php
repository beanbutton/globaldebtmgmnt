<?php
$this->breadcrumbs=array(
	'Debtor Progresses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorProgress', 'url'=>array('index')),
	array('label'=>'Manage DebtorProgress', 'url'=>array('admin')),
);
?>

<h1>Create DebtorProgress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>