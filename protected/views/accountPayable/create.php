<?php
$this->breadcrumbs=array(
	'Account Payables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountPayable', 'url'=>array('index')),
	array('label'=>'Manage AccountPayable', 'url'=>array('admin')),
);
?>

<h1>Create AccountPayable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>