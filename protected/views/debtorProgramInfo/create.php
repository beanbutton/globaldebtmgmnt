<?php
$this->breadcrumbs=array(
	'Debtor Program Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DebtorProgramInfo', 'url'=>array('index')),
	array('label'=>'Manage DebtorProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Create DebtorProgramInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>