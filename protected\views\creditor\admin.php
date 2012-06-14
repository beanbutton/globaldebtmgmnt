<?php
$this->breadcrumbs=array(
	'Creditors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Creditor', 'url'=>array('index')),
	array('label'=>'Create Creditor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('creditor-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Creditors</h1>

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
	'id'=>'creditor-grid',
	'dataProvider'=>$model->search(),
	
	'htmlOptions'=>array('style' =>'cursor: pointer;'),
     
	 'selectionChanged' => "function(id){location.href='"
	 . Yii::app()->urlManager->createUrl('creditor/updatePopup', array('id'=>'')) 
     . "' + $.fn.yiiGridView.getSelection(id);}",
     
	'filter'=>$model,
	'columns'=>array(
		'id',
		
		/**array(
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
		),**/
		
		'Fk_debtor_id',
		'name',
		'badge_number',
		'file_number',
		'company_name',
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
