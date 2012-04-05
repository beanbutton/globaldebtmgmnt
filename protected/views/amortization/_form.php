<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'amortization-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>
	
	<div class="row">
		<?php echo CHtml::encode("Debtor");?>
		<br/>		
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>

	
	<div class="row">
		<?php echo $form -> labelEx($model, 'payment_start_date');?>
		<?php echo $form -> textField($model, 'payment_start_date');?>
		<?php echo CHtml::image("images/calendar_btn.jpg", 
		"calendar", array("id" => "c_button1", "class" => "pointer"));?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'Amortization_payment_start_date', 'button' => 'c_button1', 'ifFormat' => '%Y-%m-%d', ));?>
		<?php echo $form -> error($model, 'payment_start_date');?>
	</div>	
	
	<div class="col">	
		<?php echo $form -> labelEx($model, 'payment_period');?>
		<?php echo $form->dropDownList( $model, 'payment_period', 
				array('1' => '1 months', '2' => '2 months', '3' => '3 months', '4' => '4 months',
			  '5' => '5 months', '6' => '6 months', '7' => '7 months', '8' => '8 months',
			  '9' => '9 months', '10' => '10 months', '11' => '11 months', '12' => '12 months',
			  '13' => '13 months', '14' => '14 months', '15' => '15 months', '16' => '16 months',
			  '17' => '17 months', '18' => '18 months', '19' => '19 months', '20' => '20 months',
			  '21' => '21 months', '22' => '22 months', '23' => '23 months', '24' => '24 months',
			  '25' => '25 months', '26' => '26 months', '27' => '27 months', '28' => '28 months',
			  '29' => '29 months', '30' => '30 months', '31' => '31 months', '32' => '32 months',
			  '33' => '33 months', '34' => '34 months', '34' => '34 months', '35' => '35 months',
			  '37' => '37 months', '38' => '38 months', '39' => '39 months', '40' => '40 months',
			  '41' => '41 months', '42' => '42 months', '43' => '43 months', '44' => '44 months',
			  '45' => '45 months', '46' => '46 months', '47' => '47 months', '48' => '48 months',
			  ),
			  array('empty' => '(Select a period)'));
		?>
	</div>
	
	<div class="row">
		<?php echo $form -> labelEx($model, 'total_monthly_cost');?>
		<?php echo $form -> textField($model, 'total_monthly_cost');?>
		<?php echo $form -> error($model, 'total_monthly_cost');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'adminstration_fee');?>
		<?php echo $form -> textField($model, 'adminstration_fee');?>
		<?php echo $form -> error($model, 'adminstration_fee');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'maintenance_fee');?>
		<?php echo $form -> textField($model, 'maintenance_fee');?>
		<?php echo $form -> error($model, 'maintenance_fee');?>
	</div>
	<div class="row">
		<?php echo $form -> labelEx($model, 'settlement_savings_fund');?>
		<?php echo $form -> textField($model, 'settlement_savings_fund');?>
		<?php echo $form -> error($model, 'settlement_savings_fund');?>
	</div>
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
	</div>
	<?php $this -> endWidget();?>
</div><!-- form -->