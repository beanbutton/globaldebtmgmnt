<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settlement-offer-form',
	'enableAjaxValidation'=>false,
)); ?>


<!-- Debtor Personal Info -->
<p>
	<h5>Debtor Information</h5>
	<div class="col">
		<?php echo $form -> labelEx($model, 'file_number'); ?>
		<?php echo $form -> textField($model, 'file_number'); ?>
		<?php echo $form -> error($model, 'file_number'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'firstname'); ?>
		<?php echo $form -> textField($model, 'firstname'); ?>
		<?php echo $form -> error($model, 'firstname'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'lastname'); ?>
		<?php echo $form -> textField($model, 'lastname'); ?>
		<?php echo $form -> error($model, 'lastname'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'date_of_birth'); ?>
		<?php echo $form -> textField($model, 'date_of_birth'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg", 
			"calendar", 
				array("id" => "cal_btn_debtor_dateofbirth", 
				"class" => "pointer")); ?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', 
			array('inputField' => 'Debtor_date_of_birth', 
			'button' => 'cal_btn_debtor_dateofbirth', 
			'ifFormat' => '%Y-%m-%d', )); ?>
		<?php echo $form -> error($model, 'date_of_birth'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'address'); ?>
		<?php echo $form -> textField($model, 'address'); ?>
		<?php echo $form -> error($model, 'address'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'postal_code'); ?>
		<?php echo $form -> textField($model, 'postal_code'); ?>
		<?php echo $form -> error($model, 'postal_code'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'social_insurance_number'); ?>
		<?php echo $form -> textField($model, 'social_insurance_number'); ?>
		<?php echo $form -> error($model, 'social_insurance_number'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'credit_card_number'); ?>
		<?php echo $form -> textField($model, 'credit_card_number'); ?>
		<?php echo $form -> error($model, 'credit_card_number'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'drivers_licence'); ?>
		<?php echo $form -> textField($model, 'drivers_licence'); ?>
		<?php echo $form -> error($model, 'drivers_licence'); ?>
	</div>

	<div class="col">
		<?php echo $form -> dropDownList($model, 
		'correspondence_language', 
		array('1' => 'English', '2' => 'French', '3' => 'Spanish'), 
		array('empty' => '(Select a language)')); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'date_filed_chapter7'); ?>
		<?php echo $form -> textField($model, 'date_filed_chapter7'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", 
			array("id" => "cal_btn_datefiledchapter7", "class" => "pointer")); ?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', 
			array('inputField' => 'Debtor_date_filed_chapter7', 
				'button' => 'cal_btn_datefiledchapter7', 
				'ifFormat' => '%Y-%m-%d', )); ?>
		<?php echo $form -> error($model, 'date_filed_chapter7'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'date_filed_chapter13'); ?>
		<?php echo $form -> textField($model, 'date_filed_chapter13'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", 
			array("id" => "cal_btn_datefiledchapter13", "class" => "pointer")); ?>
		<?php $this -> widget('application.extensions.calendar.SCalendar', 
			array('inputField' => 'Debtor_date_filed_chapter13', 
			'button' => 'cal_btn_datefiledchapter13', 
			'ifFormat' => '%Y-%m-%d', )); ?>
		<?php echo $form -> error($model, 'date_filed_chapter13'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'home_telephone'); ?>
		<?php echo $form -> textField($model, 'home_telephone'); ?>
		<?php echo $form -> error($model, 'home_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'mobile_telephone'); ?>
		<?php echo $form -> textField($model, 'mobile_telephone'); ?>
		<?php echo $form -> error($model, 'mobile_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'other_telephone'); ?>
		<?php echo $form -> textField($model, 'other_telephone'); ?>
		<?php echo $form -> error($model, 'other_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'best_time_to_call'); ?>
		<?php echo $form -> textField($model, 'best_time_to_call'); ?>
		<?php echo $form -> error($model, 'best_time_to_call'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'faxnumber'); ?>
		<?php echo $form -> textField($model, 'faxnumber'); ?>
		<?php echo $form -> error($model, 'faxnumber'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_status'); ?>
		<?php echo $form -> textField($model, 'employment_status'); ?>
		<?php echo $form -> error($model, 'employment_status'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_occupation'); ?>
		<?php echo $form -> textField($model, 'employment_occupation'); ?>
		<?php echo $form -> error($model, 'employment_occupation'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employer'); ?>
		<?php echo $form -> textField($model, 'employer'); ?>
		<?php echo $form -> error($model, 'employer'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_work_years'); ?>
		<?php echo $form -> textField($model, 'employment_work_years'); ?>
		<?php echo $form -> error($model, 'employment_work_years'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_telephone'); ?>
		<?php echo $form -> textField($model, 'employment_telephone'); ?>
		<?php echo $form -> error($model, 'employment_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_insurance'); ?>
		<?php echo $form -> textField($model, 'employment_insurance'); ?>
		<?php echo $form -> error($model, 'employment_insurance'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'employment_disability'); ?>
		<?php echo $form -> textField($model, 'employment_disability'); ?>
		<?php echo $form -> error($model, 'employment_disability'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'pension'); ?>
		<?php echo $form -> textField($model, 'pension'); ?>
		<?php echo $form -> error($model, 'pension'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'comments'); ?>
                <?php echo $form->  textArea($model,'comments',array('rows'=>3, 'cols'=>35)); ?>
                <?php echo $form -> error($model, 'comments'); ?>
        </div>
	<em style="font-size: 10px">*Continue to fill up information to Spouse Page</em>
</p>

<div class="row buttons">
		<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Update');?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->