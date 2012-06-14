<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Client', 'url'=>array('index')),
	array('label'=>'Create Client', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('client-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clients</h1>

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
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('style' =>'cursor: pointer;'),
     
	 'selectionChanged' => "function(id){location.href='"
	 . Yii::app()->urlManager->createUrl('client/updatePopup', array('id'=>'')) 
     . "' + $.fn.yiiGridView.getSelection(id);}",
	
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Fk_user_id',
		'name',
		'file_number',
		'savings',
		'assigned_to',
		/*
		'negotiator',
		'client_services',
		'account_managers',
		'total_debt',
		'original_debt',
		'enrollment_date',
		'status',
		'comments',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
