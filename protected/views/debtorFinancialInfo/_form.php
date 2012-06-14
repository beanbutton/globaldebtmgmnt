<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-financial-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo CHtml::activeLabel($model,'Fk_debtor_id',array('label'=>'Debtor File#'))?>
		<br/>		
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>



	<div class="col">
		<?php echo $form->labelEx($model,'name_financial_institution'); ?>
		<?php echo $form->textField($model,'name_financial_institution',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_financial_institution'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'branch_address'); ?>
		<?php echo $form->textField($model,'branch_address',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch_address'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'institution_numer'); ?>
		<?php echo $form->textField($model,'institution_numer',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'institution_numer'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'branch_number'); ?>
		<?php echo $form->textField($model,'branch_number',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>
	
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Fk_debtor_id'); ?>
		<?php echo $form->textField($model,'Fk_debtor_id'); ?>
		<?php echo $form->error($model,'Fk_debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_financial_institution'); ?>
		<?php echo $form->textField($model,'name_financial_institution',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_financial_institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_address'); ?>
		<?php echo $form->textField($model,'branch_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institution_numer'); ?>
		<?php echo $form->textField($model,'institution_numer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'institution_numer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_number'); ?>
		<?php echo $form->textField($model,'branch_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'branch_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'account_number'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->