<?php
$this->breadcrumbs=array(
	'File Upload Items',
);

$this->menu=array(
	array('label'=>'Create FileUploadItem', 'url'=>array('create')),
	array('label'=>'Manage FileUploadItem', 'url'=>array('admin')),
);
?>

<h1>File Upload Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
