<?php
$this->breadcrumbs=array(
	'File Upload Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FileUploadItem', 'url'=>array('index')),
	array('label'=>'Manage FileUploadItem', 'url'=>array('admin')),
);
?>

<h1>Create FileUploadItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>