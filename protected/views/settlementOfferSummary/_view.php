<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_debtor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_debtor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_debt')); ?>:</b>
	<?php echo CHtml::encode($data->total_debt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('months_to_repay')); ?>:</b>
	<?php echo CHtml::encode($data->months_to_repay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interest_rate')); ?>:</b>
	<?php echo CHtml::encode($data->interest_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra_interest_paid')); ?>:</b>
	<?php echo CHtml::encode($data->extra_interest_paid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ave_settlement')); ?>:</b>
	<?php echo CHtml::encode($data->ave_settlement); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_cost')); ?>:</b>
	<?php echo CHtml::encode($data->total_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('savings_our_program')); ?>:</b>
	<?php echo CHtml::encode($data->savings_our_program); ?>
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