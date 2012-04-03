<?php
$this->breadcrumbs=array(
	'Debtor Progresses',
);

$this->menu=array(
	array('label'=>'Create DebtorProgress', 'url'=>array('create')),
	array('label'=>'Manage DebtorProgress', 'url'=>array('admin')),
);
?>

<h1>Debtor Progresses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
