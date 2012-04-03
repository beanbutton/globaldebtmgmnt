<?php
$this -> breadcrumbs = array('Settlement Offer Summaries', );

$this -> menu = array( array('label' => 'Create SettlementOfferSummary', 'url' => array('create')), array('label' => 'Manage SettlementOfferSummary', 'url' => array('admin')), );
?>

<h1>Settlement Offer Summaries</h1>
<div id="settlement_offer_summary_view">
	<?php
	$this -> widget('application.extensions.cvisualizewidget.CVisualizeWidget', 
	$settlement_offer_summary_view
	);
?>
</div>
<br />
<div id='total_debt_view'>
	<?php
	$this -> widget('application.extensions.cvisualizewidget.CVisualizeWidget', 
		$total_debt_summary_view);
	?>
</div>


<!--
<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
-->