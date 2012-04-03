<?php
$this->breadcrumbs=array(
	'Debtors',
);

$this->menu=array(
	array('label'=>'Create Debtor', 'url'=>array('create')),
	array('label'=>'Manage Debtor', 'url'=>array('admin')),
);
?>

<h1>Debtors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
