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
		<?php echo $form->label($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_auto_expenses'); ?>
		<?php echo $form->textField($model,'monthly_auto_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_payment1'); ?>
		<?php echo $form->textField($model,'car_payment1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_payment2'); ?>
		<?php echo $form->textField($model,'car_payment2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recreational_vehicle'); ?>
		<?php echo $form->textField($model,'recreational_vehicle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_auto_payments'); ?>
		<?php echo $form->textField($model,'monthly_auto_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_utilites'); ?>
		<?php echo $form->textField($model,'monthly_utilites'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->textField($model,'monthly_grocery_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_insurance_payments'); ?>
		<?php echo $form->textField($model,'monthly_insurance_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rrsp'); ?>
		<?php echo $form->textField($model,'rrsp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gas_and_electricuty'); ?>
		<?php echo $form->textField($model,'gas_and_electricuty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'water_trash_sewer'); ?>
		<?php echo $form->textField($model,'water_trash_sewer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cable_and_internet_services'); ?>
		<?php echo $form->textField($model,'cable_and_internet_services'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'food_stamp_or_other'); ?>
		<?php echo $form->textField($model,'food_stamp_or_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->textField($model,'spouse_monthly_takehome_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reason_for_hardship'); ?>
		<?php echo $form->textField($model,'reason_for_hardship',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estimated_home_value'); ?>
		<?php echo $form->textField($model,'estimated_home_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->textField($model,'remaining_mortgage_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_number_dependants'); ?>
		<?php echo $form->textField($model,'total_number_dependants'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'household_expenses'); ?>
		<?php echo $form->textField($model,'household_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->textField($model,'total_debt_to_income_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->textField($model,'total_expenses_to_income_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage'); ?>
		<?php echo $form->textField($model,'mortgage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rent'); ?>
		<?php echo $form->textField($model,'rent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fk_debtor_id'); ?>
		<?php echo $form->textField($model,'Fk_debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gross_monthly_income'); ?>
		<?php echo $form->textField($model,'gross_monthly_income'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->