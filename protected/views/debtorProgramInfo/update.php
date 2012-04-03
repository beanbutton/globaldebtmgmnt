<?php
$this->breadcrumbs=array(
	'Debtor Program Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DebtorProgramInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorProgramInfo', 'url'=>array('create')),
	array('label'=>'View DebtorProgramInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DebtorProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Update DebtorProgramInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>