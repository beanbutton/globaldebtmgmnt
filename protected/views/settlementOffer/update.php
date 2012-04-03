<?php
$this->breadcrumbs=array(
	'Settlement Offers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SettlementOffer', 'url'=>array('index')),
	array('label'=>'Create SettlementOffer', 'url'=>array('create')),
	array('label'=>'View SettlementOffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Update SettlementOffer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>