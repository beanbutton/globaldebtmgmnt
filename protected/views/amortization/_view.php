<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_start_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_end_date')); ?>:</b>
	<?php echo CHtml::encode($data->payment_end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_monthly_cost')); ?>:</b>
	<?php echo CHtml::encode($data->total_monthly_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminstration_fee')); ?>:</b>
	<?php echo CHtml::encode($data->adminstration_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maintenance_fee')); ?>:</b>
	<?php echo CHtml::encode($data->maintenance_fee); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_savings_fund')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_savings_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_monthly_cost_total')); ?>:</b>
	<?php echo CHtml::encode($data->total_monthly_cost_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_adminstration_fee')); ?>:</b>
	<?php echo CHtml::encode($data->total_adminstration_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_maintenance_fee')); ?>:</b>
	<?php echo CHtml::encode($data->total_maintenance_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_settlement_savings_fund')); ?>:</b>
	<?php echo CHtml::encode($data->total_settlement_savings_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>
</div>



<?php
$columnsArray = array('id',
	'Payment Date', 
	'Total Monthly Cost',
	'Administration Fee',
	'Maintenance Fee',
	'Settlement Saving Fund');
	
$rowsArray = array(
    array(1,'Jose','Rullan','123-123-1234','jose@email.com'),
    array(2,'Fred','Frederick','123-123-1234','fred@email.com'),
    array(3,'Paul','Horstmann','123-123-1234','phor@email.com'),
    array(4,'Kim','Guptha','123-123-1234','kgup@email.com'),
    array(5,'Fred','Frederick','123-123-1234','fred@email.com'),
    array(6,'Querty','Uiop','123-123-1234','querty@email.com'),
    array(7,'Albert','Febensburg','123-123-1234','a@email.com'),
    array(8,'Dan','Sieg','123-123-1234','da@email.com'),
    array(9,'Janice','Breyfogle','123-123-1234','janice@email.com'),
    array(10,'Cornelious','Ape','123-123-1234','potapes@email.com'),    
);

$this->widget('ext.htmlTableUi.htmlTableUi',array(
    'collapsed'=>false,
    'enableSort'=>true,
    'sortColumn'=>1,
    'sortOrder'=>'desc',
    'title'=>'Payment Plan Table',
    'extra'=>'+Hide',
    'columns'=>$columnsArray,
    'rows'=>$rowsArray,
    'footer'=>'Total rows: '.count($rowsArray)
));
?>

<?php
$begin = new DateTime( '2007-12-31' );
$end = new DateTime( '2009-12-31' );

$interval = DateInterval::createFromDateString('last thursday of next month');
$period = new DatePeriod($begin, $interval, $end, DatePeriod::EXCLUDE_START_DATE);

foreach ( $period as $dt )
  echo $dt->format( "Y-m-d" )."<br>";
?>