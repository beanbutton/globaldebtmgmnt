<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_settlement_offer')); ?>:</b>
	<?php echo CHtml::encode($data->current_settlement_offer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_settlement_perc')); ?>:</b>
	<?php echo CHtml::encode($data->current_settlement_perc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offer_valid_until_date')); ?>:</b>
	<?php echo CHtml::encode($data->offer_valid_until_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_debt')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_debt')); ?>:</b>
	<?php echo CHtml::encode($data->total_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('days_behind')); ?>:</b>
	<?php echo CHtml::encode($data->days_behind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_date')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('settlement_amount')); ?>:</b>
	<?php echo CHtml::encode($data->settlement_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings')); ?>:</b>
	<?php echo CHtml::encode($data->savings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>