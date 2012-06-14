<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'debtor-financial-info-grid',
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
		'name_financial_institution',
		'branch_address',
		'city',
		'province',
		/*
		'postal_code',
		'phone_number',
		'institution_numer',
		'branch_number',
		'account_number',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
