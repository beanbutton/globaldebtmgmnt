<?php
$this->breadcrumbs=array(
	'Negotiators'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Negotiator', 'url'=>array('index')),
	array('label'=>'Manage Negotiator', 'url'=>array('admin')),
);
?>

<h1>Create Negotiator</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>