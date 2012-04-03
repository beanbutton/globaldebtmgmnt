<?php
$this->breadcrumbs=array(
	'Amortizations',
);

$this->menu=array(
	array('label'=>'Create Amortization', 'url'=>array('create')),
	array('label'=>'Manage Amortization', 'url'=>array('admin')),
);
?>

<h1>Amortizations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
