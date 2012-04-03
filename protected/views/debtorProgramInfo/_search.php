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
		<?php echo $form->label($model,'program_type'); ?>
		<?php echo $form->textField($model,'program_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_payment'); ?>
		<?php echo $form->textField($model,'monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_monthly_payment'); ?>
		<?php echo $form->textField($model,'saf_monthly_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nsf_amount'); ?>
		<?php echo $form->textField($model,'nsf_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_payment_due_date'); ?>
		<?php echo $form->textField($model,'monthly_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_monthly_payment_date'); ?>
		<?php echo $form->textField($model,'first_monthly_payment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'next_payment_due_date'); ?>
		<?php echo $form->textField($model,'next_payment_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contract_due_date'); ?>
		<?php echo $form->textField($model,'contract_due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maintenance_fee_manual'); ?>
		<?php echo $form->textField($model,'maintenance_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maintenance_fee_automatic'); ?>
		<?php echo $form->textField($model,'maintenance_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_percentage_automatic'); ?>
		<?php echo $form->textField($model,'admin_fee_percentage_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_fee_percentage_manual'); ?>
		<?php echo $form->textField($model,'admin_fee_percentage_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_percentage_automatic'); ?>
		<?php echo $form->textField($model,'service_fee_percentage_automatic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_manual'); ?>
		<?php echo $form->textField($model,'service_fee_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_fee_percentage_manual'); ?>
		<?php echo $form->textField($model,'service_fee_percentage_manual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'savings_amount'); ?>
		<?php echo $form->textField($model,'savings_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'savings_percentage'); ?>
		<?php echo $form->textField($model,'savings_percentage'); ?>
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