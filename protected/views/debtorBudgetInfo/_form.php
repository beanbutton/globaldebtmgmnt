<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-budget-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabel($model,'Fk_debtor_id',array('label'=>'Debtor File#'))?>
		<br/>		
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number' ), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>


	<div class="col">
		<?php echo $form->labelEx($model,'monthly_auto_payments'); ?>
		<?php echo $form->textField($model,'monthly_auto_payments'); ?>
		<?php echo $form->error($model,'monthly_auto_payments'); ?>
	</div>
        
        <div class="col">
		<?php echo $form->labelEx($model,'food_stamp_or_other'); ?>
		<?php echo $form->textField($model,'food_stamp_or_other'); ?>
		<?php echo $form->error($model,'food_stamp_or_other'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'total_number_dependants'); ?>
		<?php echo $form->textField($model,'total_number_dependants'); ?>
		<?php echo $form->error($model,'total_number_dependants'); ?>
	</div>
        
        <div class="col">
		<?php echo $form->labelEx($model,'monthly_utilites'); ?>
		<?php echo $form->textField($model,'monthly_utilites'); ?>
		<?php echo $form->error($model,'monthly_utilites'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->textField($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->error($model,'spouse_monthly_takehome_pay'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'household_expenses'); ?>
		<?php echo $form->textField($model,'household_expenses'); ?>
		<?php echo $form->error($model,'household_expenses'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'monthly_auto_expenses'); ?>
		<?php echo $form->textField($model,'monthly_auto_expenses'); ?>
		<?php echo $form->error($model,'monthly_auto_expenses'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
		<?php echo $form->error($model,'monthly_income'); ?>
	</div>
        
        <div class="col">
		<?php echo $form->labelEx($model,'gross_monthly_income'); ?>
		<?php echo $form->textField($model,'gross_monthly_income'); ?>
		<?php echo $form->error($model,'gross_monthly_income'); ?>
	</div>
        
        <div class="col">
		<?php echo $form->labelEx($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->textField($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->error($model,'total_debt_to_income_perc'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->textField($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->error($model,'monthly_grocery_expenses'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'reason_for_hardship'); ?>
		<?php echo $form->textField($model,'reason_for_hardship'); ?>
		<?php echo $form->error($model,'reason_for_hardship'); ?>
	</div>

        <div class="col" style="font-size:11px;">
		<?php echo $form->labelEx($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->textField($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->error($model,'total_expenses_to_income_variance'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'monthly_insurance_payments'); ?>
		<?php echo $form->textField($model,'monthly_insurance_payments'); ?>
		<?php echo $form->error($model,'monthly_insurance_payments'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'estimated_home_value'); ?>
		<?php echo $form->textField($model,'estimated_home_value'); ?>
		<?php echo $form->error($model,'estimated_home_value'); ?>
	</div>
        
	<div class="col">
		<?php echo $form->labelEx($model,'mortgage'); ?>
		<?php echo $form->textField($model,'mortgage'); ?>
		<?php echo $form->error($model,'mortgage'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'rrsp'); ?>
		<?php echo $form->textField($model,'rrsp'); ?>
		<?php echo $form->error($model,'rrsp'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->textField($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->error($model,'remaining_mortgage_balance'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'rent'); ?>
		<?php echo $form->textField($model,'rent'); ?>
		<?php echo $form->error($model,'rent'); ?>
	</div>
	
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'monthly_income'); ?>
		<?php echo $form->textField($model,'monthly_income'); ?>
		<?php echo $form->error($model,'monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_auto_expenses'); ?>
		<?php echo $form->textField($model,'monthly_auto_expenses'); ?>
		<?php echo $form->error($model,'monthly_auto_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_payment1'); ?>
		<?php echo $form->textField($model,'car_payment1'); ?>
		<?php echo $form->error($model,'car_payment1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_payment2'); ?>
		<?php echo $form->textField($model,'car_payment2'); ?>
		<?php echo $form->error($model,'car_payment2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recreational_vehicle'); ?>
		<?php echo $form->textField($model,'recreational_vehicle'); ?>
		<?php echo $form->error($model,'recreational_vehicle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_auto_payments'); ?>
		<?php echo $form->textField($model,'monthly_auto_payments'); ?>
		<?php echo $form->error($model,'monthly_auto_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_utilites'); ?>
		<?php echo $form->textField($model,'monthly_utilites'); ?>
		<?php echo $form->error($model,'monthly_utilites'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->textField($model,'monthly_grocery_expenses'); ?>
		<?php echo $form->error($model,'monthly_grocery_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_insurance_payments'); ?>
		<?php echo $form->textField($model,'monthly_insurance_payments'); ?>
		<?php echo $form->error($model,'monthly_insurance_payments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrsp'); ?>
		<?php echo $form->textField($model,'rrsp'); ?>
		<?php echo $form->error($model,'rrsp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gas_and_electricuty'); ?>
		<?php echo $form->textField($model,'gas_and_electricuty'); ?>
		<?php echo $form->error($model,'gas_and_electricuty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone'); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'water_trash_sewer'); ?>
		<?php echo $form->textField($model,'water_trash_sewer'); ?>
		<?php echo $form->error($model,'water_trash_sewer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cable_and_internet_services'); ?>
		<?php echo $form->textField($model,'cable_and_internet_services'); ?>
		<?php echo $form->error($model,'cable_and_internet_services'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'food_stamp_or_other'); ?>
		<?php echo $form->textField($model,'food_stamp_or_other'); ?>
		<?php echo $form->error($model,'food_stamp_or_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->textField($model,'spouse_monthly_takehome_pay'); ?>
		<?php echo $form->error($model,'spouse_monthly_takehome_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reason_for_hardship'); ?>
		<?php echo $form->textField($model,'reason_for_hardship',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reason_for_hardship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estimated_home_value'); ?>
		<?php echo $form->textField($model,'estimated_home_value'); ?>
		<?php echo $form->error($model,'estimated_home_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->textField($model,'remaining_mortgage_balance'); ?>
		<?php echo $form->error($model,'remaining_mortgage_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_number_dependants'); ?>
		<?php echo $form->textField($model,'total_number_dependants'); ?>
		<?php echo $form->error($model,'total_number_dependants'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'household_expenses'); ?>
		<?php echo $form->textField($model,'household_expenses'); ?>
		<?php echo $form->error($model,'household_expenses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->textField($model,'total_debt_to_income_perc'); ?>
		<?php echo $form->error($model,'total_debt_to_income_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->textField($model,'total_expenses_to_income_variance'); ?>
		<?php echo $form->error($model,'total_expenses_to_income_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mortgage'); ?>
		<?php echo $form->textField($model,'mortgage'); ?>
		<?php echo $form->error($model,'mortgage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rent'); ?>
		<?php echo $form->textField($model,'rent'); ?>
		<?php echo $form->error($model,'rent'); ?>
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
		<?php echo $form->labelEx($model,'Fk_debtor_id'); ?>
		<?php echo $form->textField($model,'Fk_debtor_id'); ?>
		<?php echo $form->error($model,'Fk_debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gross_monthly_income'); ?>
		<?php echo $form->textField($model,'gross_monthly_income'); ?>
		<?php echo $form->error($model,'gross_monthly_income'); ?>
	</div>
	
-->

	<div class="row buttons" style="margin-bottom: 40px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->