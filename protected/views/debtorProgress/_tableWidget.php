
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-progress-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'Fk_debtor_id',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->Fk_debtor_id), 
            	array( "debtorOverview/view", 
            	"id" => $data->Fk_debtor_id)
				)',
		),
		'status',
		'current_settlement_offer',
		'current_settlement_perc',
		'offer_date',
		/*
		'offer_valid_until_date',
		'type_of_debt',
		'total_debt',
		'days_behind',
		'settlement_date',
		'settlement_amount',
		'savings',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
