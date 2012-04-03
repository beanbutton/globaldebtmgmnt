<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'user-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="row">
		<?php echo CHtml::encode("Role");?>
		<?php echo $form->dropDownList($model, 'role', $model->getRoles(), 
			array('empty'=>'Select Role')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>
	

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->