<?php
$this->breadcrumbs=array(
	'Account Payables',
);

$this->menu=array(
	array('label'=>'Create AccountPayable', 'url'=>array('create')),
	array('label'=>'Manage AccountPayable', 'url'=>array('admin')),
);
?>

<h1>Account Payables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
