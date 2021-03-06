<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employee-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employees</h1>

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
	'id'=>'employee-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('style' =>'cursor: pointer;'),
     
	 'selectionChanged' => "function(id){location.href='"
	 . Yii::app()->urlManager->createUrl('emoployee/updatePopup', array('id'=>'')) 
     . "' + $.fn.yiiGridView.getSelection(id);}",

	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'Fk_user_id',
            'type'=>'raw',
            'value'=> 'CHtml::link(
            	CHtml::encode($data->Fk_user_id), 
            	array( "employee/view", 
            	"id" => $data->Fk_user_id)
				)',
		),
		'firstname',
		'lastname',
		'phone_number',
		'address',
		/*
		'city',
		'postal_code',
		'email',
		'emergency_contact',
		'emergency_phone_number',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
