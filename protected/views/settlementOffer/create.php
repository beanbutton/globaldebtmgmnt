<?php
$this->breadcrumbs=array(
	'Settlement Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SettlementOffer', 'url'=>array('index')),
	array('label'=>'Manage SettlementOffer', 'url'=>array('admin')),
);
?>

<h1>Create SettlementOffer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'creditor' => $creditor)); ?>