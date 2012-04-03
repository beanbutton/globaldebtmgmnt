<?php
$this->breadcrumbs=array(
	'Settlement Offer Summaries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SettlementOfferSummary', 'url'=>array('index')),
	array('label'=>'Manage SettlementOfferSummary', 'url'=>array('admin')),
);
?>

<h1>Create SettlementOfferSummary</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>