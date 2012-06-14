<div class="view">
	<b><?php echo CHtml::encode($data -> getAttributeLabel('id'));?>:</b>
	<?php echo CHtml::link(CHtml::encode($data -> id), array('view', 'id' => $data -> id));?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('Fk_debtor_id'));?>:</b>
	<?php echo CHtml::encode($data -> Fk_debtor_id);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('payment_start_date'));?>:</b>
	<?php echo CHtml::encode($data -> payment_start_date);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('payment_end_date'));?>:</b>
	<?php echo CHtml::encode($data -> payment_end_date);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('payment_period'));?>:</b>
	<?php echo CHtml::encode($data -> payment_period);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('total_monthly_cost'));?>:</b>
	<?php echo CHtml::encode($data -> total_monthly_cost);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('adminstration_fee'));?>:</b>
	<?php echo CHtml::encode($data -> adminstration_fee);?>
	<br />
	<b><?php echo CHtml::encode($data -> getAttributeLabel('maintenance_fee'));?>:</b>
	<?php echo CHtml::encode($data -> maintenance_fee);?>
	<br />
</div>

