
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'creditor-grid',
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
		array(
			'name'=>'badge_number',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->badge_number), 
            	array( "creditor/view", 
            	"id" => $data->id)
				)',
		),
		array(
			'name'=>'file_number',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->file_number), 
            	array( "creditor/view", 
            	"id" => $data->id)
				)',
		),
		array(
			'name'=>'name',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->name), 
            	array( "creditor/view", 
            	"id" => $data->id)
				)',
		),
		array(
		'name'=>'company_name',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->company_name), 
            	array( "creditor/view", 
            	"id" => $data->id)
				)',
		),
		'address',
		/*
		'telephone1',
		'telephone1_ext',
		'telephone2',
		'telephone2_ext',
		'email',
		'faxnumber',
		'comments',
		'created_at',
		'updated_at',
		'postal_code',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
