<?php
$this->breadcrumbs=array(
	'Account Receivables',
);

$this->menu=array(
	array('label'=>'Create AccountReceivable', 'url'=>array('create')),
	array('label'=>'Manage AccountReceivable', 'url'=>array('admin')),
);
?>

<h1>Account Receivables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
