<?php
$this->breadcrumbs=array(
	'Debtor Program Infos',
);

$this->menu=array(
	array('label'=>'Create DebtorProgramInfo', 'url'=>array('create')),
	array('label'=>'Manage DebtorProgramInfo', 'url'=>array('admin')),
);
?>

<h1>Debtor Program Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
