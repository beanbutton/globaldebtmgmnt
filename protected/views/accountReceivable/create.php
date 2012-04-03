<?php
$this->breadcrumbs=array(
	'Account Receivables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountReceivable', 'url'=>array('index')),
	array('label'=>'Manage AccountReceivable', 'url'=>array('admin')),
);
?>

<h1>Create AccountReceivable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>