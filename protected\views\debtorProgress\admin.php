<?php
$this->breadcrumbs=array(
	'Debtor Progresses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DebtorProgress', 'url'=>array('index')),
	array('label'=>'Create DebtorProgress', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-progress-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtor Progresses</h1>

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
	'id'=>'debtor-progress-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('style' =>'cursor: pointer;'),
     
	 'selectionChanged' => "function(id){location.href='"
	 . Yii::app()->urlManager->createUrl('debtorProgress/updatePopup', array('id'=>'')) 
     . "' + $.fn.yiiGridView.getSelection(id);}",
     
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Fk_debtor_id',
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
