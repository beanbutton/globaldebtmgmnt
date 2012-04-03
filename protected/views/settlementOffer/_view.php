<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_number')); ?>:</b>
	<?php echo CHtml::encode($data->file_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_amount')); ?>:</b>
	<?php echo CHtml::encode($data->offer_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_amount_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->offer_amount_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_saving_amonut')); ?>:</b>
	<?php echo CHtml::encode($data->client_saving_amonut); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('client_savings_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->client_savings_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_reserves')); ?>:</b>
	<?php echo CHtml::encode($data->client_reserves); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_fees')); ?>:</b>
	<?php echo CHtml::encode($data->service_fees); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('difference_amount')); ?>:</b>
	<?php echo CHtml::encode($data->difference_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_status')); ?>:</b>
	<?php echo CHtml::encode($data->offer_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_date')); ?>:</b>
	<?php echo CHtml::encode($data->valid_date); ?>
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