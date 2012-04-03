<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fk_debtor_id'); ?>
		<?php echo $form->textField($model,'Fk_debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_amount'); ?>
		<?php echo $form->textField($model,'offer_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_amount_percentage'); ?>
		<?php echo $form->textField($model,'offer_amount_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_saving_amonut'); ?>
		<?php echo $form->textField($model,'client_saving_amonut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_savings_percentage'); ?>
		<?php echo $form->textField($model,'client_savings_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_reserves'); ?>
		<?php echo $form->textField($model,'client_reserves'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fees'); ?>
		<?php echo $form->textField($model,'service_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difference_amount'); ?>
		<?php echo $form->textField($model,'difference_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_status'); ?>
		<?php echo $form->textField($model,'offer_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valid_date'); ?>
		<?php echo $form->textField($model,'valid_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->