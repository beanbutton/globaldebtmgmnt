<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'user-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="row">
		<?php echo $form -> labelEx($model, 'username');?>
		<?php echo $form -> textField($model, 'username', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'username');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'password');?>
		<?php echo $form -> passwordField($model, 'password', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'password');?>
	</div>
	<div class="row rememberMe">
		<?php echo $form -> checkBox($model, 'remember_me');?>
		<?php echo $form -> label($model, 'remember_me');?>
		<?php echo $form -> error($model, 'remember_me');?>
	</div>
	<!--
	<div class="row">
	<?php echo $form->labelEx($model,'salt'); ?>
	<?php echo $form->textField($model,'salt',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'salt'); ?>
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
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->