<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_number')); ?>:</b>
	<?php echo CHtml::encode($data->file_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings')); ?>:</b>
	<?php echo CHtml::encode($data->savings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigned_to')); ?>:</b>
	<?php echo CHtml::encode($data->assigned_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negotiator')); ?>:</b>
	<?php echo CHtml::encode($data->negotiator); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_services')); ?>:</b>
	<?php echo CHtml::encode($data->client_services); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_managers')); ?>:</b>
	<?php echo CHtml::encode($data->account_managers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_debt')); ?>:</b>
	<?php echo CHtml::encode($data->total_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_debt')); ?>:</b>
	<?php echo CHtml::encode($data->original_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enrollment_date')); ?>:</b>
	<?php echo CHtml::encode($data->enrollment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>