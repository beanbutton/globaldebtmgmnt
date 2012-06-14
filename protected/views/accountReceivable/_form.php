<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-receivable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'invoice_number'); ?>
		<?php echo $form->textField($model,'invoice_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'invoice_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'invoice_date'); ?>
		<?php echo $form->textField($model,'invoice_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'AccountReceivable_invoice_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'invoice_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'invoice_amount'); ?>
		<?php echo $form->textField($model,'invoice_amount'); ?>
		<?php echo $form->error($model,'invoice_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->