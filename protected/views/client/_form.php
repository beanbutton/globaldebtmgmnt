<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'savings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_to'); ?>
		<?php echo $form->textField($model,'assigned_to',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negotiator'); ?>
		<?php echo $form->textField($model,'negotiator',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'negotiator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_services'); ?>
		<?php echo $form->textField($model,'client_services',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'client_services'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_managers'); ?>
		<?php echo $form->textField($model,'account_managers',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'account_managers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Client_enrollment_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
		<?php echo $form->error($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>


<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Fk_user_id'); ?>
		<?php echo $form->textField($model,'Fk_user_id'); ?>
		<?php echo $form->error($model,'Fk_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
		<?php echo $form->error($model,'savings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_to'); ?>
		<?php echo $form->textField($model,'assigned_to',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negotiator'); ?>
		<?php echo $form->textField($model,'negotiator',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'negotiator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_services'); ?>
		<?php echo $form->textField($model,'client_services',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'client_services'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_managers'); ?>
		<?php echo $form->textField($model,'account_managers',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'account_managers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
		<?php echo $form->error($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
		<?php echo $form->error($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
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
	
-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->