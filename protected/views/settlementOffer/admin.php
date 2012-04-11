<?php
$this->breadcrumbs=array(
	'Settlement Offers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SettlementOffer', 'url'=>array('index')),
	array('label'=>'Create SettlementOffer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('settlement-offer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Settlement Offers</h1>

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
		/*
		'client_saving_amonut',
		'client_savings_percentage',
		'client_reserves',
		'service_fees',
		'difference_amount',
		'offer_status',
		'valid_date',
		'comments',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
