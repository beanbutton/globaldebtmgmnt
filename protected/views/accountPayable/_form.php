<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-payable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Fk_user_id'); ?>
		<?php echo $form->textField($model,'Fk_user_id'); ?>
		<?php echo $form->error($model,'Fk_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_number'); ?>
		<?php echo $form->textField($model,'invoice_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'invoice_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_date'); ?>
		<?php echo $form->textField($model,'invoice_date'); ?>
		<?php echo $form->error($model,'invoice_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_amount'); ?>
		<?php echo $form->textField($model,'invoice_amount'); ?>
		<?php echo $form->error($model,'invoice_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->