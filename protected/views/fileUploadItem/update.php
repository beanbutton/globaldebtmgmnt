<?php
$this->breadcrumbs=array(
	'File Upload Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FileUploadItem', 'url'=>array('index')),
	array('label'=>'Create FileUploadItem', 'url'=>array('create')),
	array('label'=>'View FileUploadItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FileUploadItem', 'url'=>array('admin')),
);
?>

<h1>Update FileUploadItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>