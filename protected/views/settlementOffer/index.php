<?php
$this->breadcrumbs=array(
	'Settlement Offers',
);

$this->menu=array(
	array('label'=>'Create SettlementOffer', 'url'=>array('create')),
	array('label'=>'Manage SettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Settlement Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
