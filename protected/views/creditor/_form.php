<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'creditor-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>
	
	<div class="row">
		<?php echo CHtml::encode("Debtor");?>
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'badge_number'); ?>
		<?php echo $form->textField($model,'badge_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'badge_number'); ?>
	</div>
	
	<div class="row">
		<?php echo $form -> labelEx($model, 'name');?>
		<?php echo $form -> textField($model, 'name', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'name');?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'address');?>
		<?php echo $form -> textField($model, 'address', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'address');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'postal_code');?>
		<?php echo $form -> textField($model, 'postal_code', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'postal_code');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'telephone1');?>
		<?php echo $form -> textField($model, 'telephone1', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'telephone1');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'telephone2');?>
		<?php echo $form -> textField($model, 'telephone2', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'telephone2');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'faxnumber');?>
		<?php echo $form -> textField($model, 'faxnumber', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'faxnumber');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'email');?>
		<?php echo $form -> textField($model, 'email', array('size' => 60, 'maxlength' => 255));?>
		<?php echo $form -> error($model, 'email');?>
	</div>
	<!--
	<div class="row">
	<?php echo $form->labelEx($model,'Fk_user_id'); ?>
	<?php echo $form->textField($model,'Fk_user_id'); ?>
	<?php echo $form->error($model,'Fk_user_id'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'Fk_debtor_id'); ?>
	<?php echo $form->textField($model,'Fk_debtor_id'); ?>
	<?php echo $form->error($model,'Fk_debtor_id'); ?>
	</div>

	

	<div class="row">
	<?php echo $form->labelEx($model,'name'); ?>
	<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'address'); ?>
	<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'telephone1'); ?>
	<?php echo $form->textField($model,'telephone1',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'telephone1'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'telephone1_ext'); ?>
	<?php echo $form->textField($model,'telephone1_ext',array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'telephone1_ext'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'telephone2'); ?>
	<?php echo $form->textField($model,'telephone2',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'telephone2'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'telephone2_ext'); ?>
	<?php echo $form->textField($model,'telephone2_ext',array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'telephone2_ext'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'email'); ?>
	<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'faxnumber'); ?>
	<?php echo $form->textField($model,'faxnumber',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'faxnumber'); ?>
	</div>

	<div class="row">
	<?php echo $form->labelEx($model,'comments'); ?>
	<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'comments'); ?>
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

	<div class="row">
	<?php echo $form->labelEx($model,'postal_code'); ?>
	<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->error($model,'postal_code'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->