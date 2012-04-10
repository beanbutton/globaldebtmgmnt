<?php
$this->breadcrumbs=array(
	'Debtor Program Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DebtorProgramInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorProgramInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-program-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtor Program Infos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
