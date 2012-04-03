<?php
$this->breadcrumbs=array(
	'Debtor Financial Infos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DebtorFinancialInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorFinancialInfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('debtor-financial-info-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Debtor Financial Infos</h1>

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
	'id'=>'debtor-financial-info-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Fk_debtor_id',
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
