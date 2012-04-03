<?php
$this->breadcrumbs=array(
	'Amortizations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Amortization', 'url'=>array('index')),
	array('label'=>'Manage Amortization', 'url'=>array('admin')),
);
?>

<h1>Create Amortization</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>