<?php
$this->breadcrumbs=array(
	'Debtor Financial Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DebtorFinancialInfo', 'url'=>array('index')),
	array('label'=>'Create DebtorFinancialInfo', 'url'=>array('create')),
	array('label'=>'Update DebtorFinancialInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DebtorFinancialInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DebtorFinancialInfo', 'url'=>array('admin')),
);
?>

<h1>View DebtorFinancialInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Fk_debtor_id',
		'name_financial_institution',
		'branch_address',
		'city',
		'province',
		'postal_code',
		'phone_number',
		'institution_numer',
		'branch_number',
		'account_number',
		'created_at',
		'updated_at',
	),
)); ?>
