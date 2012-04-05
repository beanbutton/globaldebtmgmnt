<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settlement-offer-summary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::encode("Debtor");?>
		<br/>		
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'months_to_repay'); ?>
		<?php echo $form->textField($model,'months_to_repay'); ?>
		<?php echo $form->error($model,'months_to_repay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
		<?php echo $form->error($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extra_interest_paid'); ?>
		<?php echo $form->textField($model,'extra_interest_paid'); ?>
		<?php echo $form->error($model,'extra_interest_paid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ave_settlement'); ?>
		<?php echo $form->textField($model,'ave_settlement'); ?>
		<?php echo $form->error($model,'ave_settlement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_cost'); ?>
		<?php echo $form->textField($model,'total_cost'); ?>
		<?php echo $form->error($model,'total_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'savings_our_program'); ?>
		<?php echo $form->textField($model,'savings_our_program'); ?>
		<?php echo $form->error($model,'savings_our_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>
-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->