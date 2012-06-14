<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<!--<b><?php /* echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id'));*/ ?>:</b>
	<?php /*echo CHtml::encode($data->Fk_debtor_id); */ ?>-->
	<!--<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_type')); ?>:</b>
	<?php echo CHtml::encode($data->program_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_payment')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_debt')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_debt')); ?>:</b>
	<?php echo CHtml::encode($data->total_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_debt')); ?>:</b>
	<?php echo CHtml::encode($data->original_debt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_monthly_payment')); ?>:</b>
	<?php echo CHtml::encode($data->saf_monthly_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nsf_amount')); ?>:</b>
	<?php echo CHtml::encode($data->nsf_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_payment_due_date')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_payment_due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enrollment_date')); ?>:</b>
	<?php echo CHtml::encode($data->enrollment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_monthly_payment_date')); ?>:</b>
	<?php echo CHtml::encode($data->first_monthly_payment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_payment_due_date')); ?>:</b>
	<?php echo CHtml::encode($data->next_payment_due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract_due_date')); ?>:</b>
	<?php echo CHtml::encode($data->contract_due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maintenance_fee_manual')); ?>:</b>
	<?php echo CHtml::encode($data->maintenance_fee_manual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maintenance_fee_automatic')); ?>:</b>
	<?php echo CHtml::encode($data->maintenance_fee_automatic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_fee_automatic')); ?>:</b>
	<?php echo CHtml::encode($data->admin_fee_automatic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_fee_percentage_automatic')); ?>:</b>
	<?php echo CHtml::encode($data->admin_fee_percentage_automatic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_fee_manual')); ?>:</b>
	<?php echo CHtml::encode($data->admin_fee_manual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_fee_percentage_manual')); ?>:</b>
	<?php echo CHtml::encode($data->admin_fee_percentage_manual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_fee_automatic')); ?>:</b>
	<?php echo CHtml::encode($data->service_fee_automatic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_fee_percentage_automatic')); ?>:</b>
	<?php echo CHtml::encode($data->service_fee_percentage_automatic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_fee_manual')); ?>:</b>
	<?php echo CHtml::encode($data->service_fee_manual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_fee_percentage_manual')); ?>:</b>
	<?php echo CHtml::encode($data->service_fee_percentage_manual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings_amount')); ?>:</b>
	<?php echo CHtml::encode($data->savings_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->savings_percentage); ?>
	<br />


	*/ ?>

</div>