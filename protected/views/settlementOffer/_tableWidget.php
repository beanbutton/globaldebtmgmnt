
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'settlement-offer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'file_number',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->file_number), 
            	array( "debtorOverview/view", 
            	"id" => $data->Fk_debtor_id)
				)',
		),
		
		
		'offer_date',
		'offer_amount',
		'offer_amount_percentage',
		'client_saving_amonut',
		'client_savings_percentage',
		'client_reserves',
		'service_fees',
		'difference_amount',
		'offer_status',
		'valid_date',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	
)); ?>


<div class="row buttons">
	<?php echo CHtml::button('Make New Offer', array('submit' => array('settlementOffer/create'))); ?>
</div>

	<?php echo CHtml::button('Settlement Offer', array('submit' => array('settlementOffer/create'))); ?>

