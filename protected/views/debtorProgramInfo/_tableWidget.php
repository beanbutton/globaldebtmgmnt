
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-program-info-grid',
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
		'program_type',
		'monthly_payment',
		'type_of_debt',
		'total_debt',
		/*
		'original_debt',
		'monthly_income',
		'saf_monthly_payment',
		'nsf_amount',
		'monthly_payment_due_date',
		'enrollment_date',
		'first_monthly_payment_date',
		'next_payment_due_date',
		'contract_due_date',
		'maintenance_fee_manual',
		'maintenance_fee_automatic',
		'admin_fee_automatic',
		'admin_fee_percentage_automatic',
		'admin_fee_manual',
		'admin_fee_percentage_manual',
		'service_fee_automatic',
		'service_fee_percentage_automatic',
		'service_fee_manual',
		'service_fee_percentage_manual',
		'savings_amount',
		'savings_percentage',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
