<?php
$this->breadcrumbs=array(
	'Settlement Offer Summaries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SettlementOfferSummary', 'url'=>array('index')),
	array('label'=>'Create SettlementOfferSummary', 'url'=>array('create')),
	array('label'=>'View SettlementOfferSummary', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SettlementOfferSummary', 'url'=>array('admin')),
);
?>

<h1>Update SettlementOfferSummary <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>