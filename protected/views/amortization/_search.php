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
		<?php echo $form->label($model,'payment_start_date'); ?>
		<?php echo $form->textField($model,'payment_start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_end_date'); ?>
		<?php echo $form->textField($model,'payment_end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_period'); ?>
		<?php echo $form->textField($model,'payment_period'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'total_monthly_cost'); ?>
		<?php echo $form->textField($model,'total_monthly_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adminstration_fee'); ?>
		<?php echo $form->textField($model,'adminstration_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maintenance_fee'); ?>
		<?php echo $form->textField($model,'maintenance_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'settlement_savings_fund'); ?>
		<?php echo $form->textField($model,'settlement_savings_fund'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_monthly_cost_total'); ?>
		<?php echo $form->textField($model,'total_monthly_cost_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_adminstration_fee'); ?>
		<?php echo $form->textField($model,'total_adminstration_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_maintenance_fee'); ?>
		<?php echo $form->textField($model,'total_maintenance_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_settlement_savings_fund'); ?>
		<?php echo $form->textField($model,'total_settlement_savings_fund'); ?>
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