<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'amortization-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style' =>'cursor: pointer;'),
    'selectionChanged'=>"function(id){window.location='" .
     	Yii::app()->urlManager->createUrl('debtorOverview/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
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
		'payment_start_date',
		'payment_end_date',
		'total_monthly_cost',
		'adminstration_fee',
		/*
		'maintenance_fee',
		'settlement_savings_fund',
		'total_monthly_cost_total',
		'total_adminstration_fee',
		'total_maintenance_fee',
		'total_settlement_savings_fund',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

