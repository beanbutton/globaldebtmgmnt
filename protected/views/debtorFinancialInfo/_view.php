<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_financial_institution')); ?>:</b>
	<?php echo CHtml::encode($data->name_financial_institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_address')); ?>:</b>
	<?php echo CHtml::encode($data->branch_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province')); ?>:</b>
	<?php echo CHtml::encode($data->province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institution_numer')); ?>:</b>
	<?php echo CHtml::encode($data->institution_numer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_number')); ?>:</b>
	<?php echo CHtml::encode($data->branch_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>