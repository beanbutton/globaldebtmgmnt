<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    
    <?php $this->beginWidget('application.extensions.jui.ETab', 
    array('name'=>'tab1', 'title'=>'Debtor Info')); ?>	
    <p>
    <h5>Debtor Information</h5>
        <div class="col">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number'); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname'); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname'); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Debtor_date_of_birth',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
                <?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code'); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'social_insurance_number'); ?>
		<?php echo $form->textField($model,'social_insurance_number'); ?>
		<?php echo $form->error($model,'social_insurance_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'credit_card_number'); ?>
		<?php echo $form->textField($model,'credit_card_number'); ?>
		<?php echo $form->error($model,'credit_card_number'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'drivers_licence'); ?>
		<?php echo $form->textField($model,'drivers_licence'); ?>
		<?php echo $form->error($model,'drivers_licence'); ?>
	</div>


	<div class="col">	
		<?php echo $form->dropDownList( $model, 'correspondence_language', 
              array('1' => 'English', '2' => 'French', '3' => 'Spanish'),
              array('empty' => '(Select a language)'));
		?>
	</div>
	
	<div class="col">
		<?php echo $form->labelEx($model,'date_filed_chapter7'); ?>
		<?php echo $form->textField($model,'date_filed_chapter7'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Debtor_date_filed_chapter7',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
                <?php echo $form->error($model,'date_filed_chapter7'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'date_filed_chapter13'); ?>
		<?php echo $form->textField($model,'date_filed_chapter13'); ?>
		<?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button3","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'Debtor_date_filed_chapter13',
                    'button'=>'c_button3',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>
                <?php echo $form->error($model,'date_filed_chapter13'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'home_telephone'); ?>
		<?php echo $form->textField($model,'home_telephone'); ?>
		<?php echo $form->error($model,'home_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'mobile_telephone'); ?>
		<?php echo $form->textField($model,'mobile_telephone'); ?>
		<?php echo $form->error($model,'mobile_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'other_telephone'); ?>
		<?php echo $form->textField($model,'other_telephone'); ?>
		<?php echo $form->error($model,'other_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'best_time_to_call'); ?>
		<?php echo $form->textField($model,'best_time_to_call'); ?>
		<?php echo $form->error($model,'best_time_to_call'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'faxnumber'); ?>
		<?php echo $form->textField($model,'faxnumber'); ?>
		<?php echo $form->error($model,'faxnumber'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_status'); ?>
		<?php echo $form->textField($model,'employment_status'); ?>
		<?php echo $form->error($model,'employment_status'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_occupation'); ?>
		<?php echo $form->textField($model,'employment_occupation'); ?>
		<?php echo $form->error($model,'employment_occupation'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employer'); ?>
		<?php echo $form->textField($model,'employer'); ?>
		<?php echo $form->error($model,'employer'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_work_years'); ?>
		<?php echo $form->textField($model,'employment_work_years'); ?>
		<?php echo $form->error($model,'employment_work_years'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_telephone'); ?>
		<?php echo $form->textField($model,'employment_telephone'); ?>
		<?php echo $form->error($model,'employment_telephone'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_insurance'); ?>
		<?php echo $form->textField($model,'employment_insurance'); ?>
		<?php echo $form->error($model,'employment_insurance'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'employment_disability'); ?>
		<?php echo $form->textField($model,'employment_disability'); ?>
		<?php echo $form->error($model,'employment_disability'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'pension'); ?>
		<?php echo $form->textField($model,'pension'); ?>
		<?php echo $form->error($model,'pension'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'comments'); ?>
                <?php echo $form->  textArea($model,'comments',array('rows'=>3, 'cols'=>35)); ?>
                <?php echo $form->error($model,'comments'); ?>
	</div>
    <em style="font-size: 10px">*Continue to fill up information to Spouse Page</em>
    </p>
    <?php $this->endWidget('application.extensions.jui.ETab'); ?>
   

<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Fk_user_id'); ?>
		<?php echo $form->textField($model,'Fk_user_id'); ?>
		<?php echo $form->error($model,'Fk_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drivers_licence'); ?>
		<?php echo $form->textField($model,'drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'drivers_licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'social_insurance_number'); ?>
		<?php echo $form->textField($model,'social_insurance_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'social_insurance_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_filed_chapter7'); ?>
		<?php echo $form->textField($model,'date_filed_chapter7'); ?>
		<?php echo $form->error($model,'date_filed_chapter7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_filed_chapter13'); ?>
		<?php echo $form->textField($model,'date_filed_chapter13'); ?>
		<?php echo $form->error($model,'date_filed_chapter13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_telephone'); ?>
		<?php echo $form->textField($model,'home_telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'home_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_telephone'); ?>
		<?php echo $form->textField($model,'mobile_telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_telephone'); ?>
		<?php echo $form->textField($model,'other_telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'other_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'best_time_to_call'); ?>
		<?php echo $form->textField($model,'best_time_to_call',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'best_time_to_call'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faxnumber'); ?>
		<?php echo $form->textField($model,'faxnumber',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'faxnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_status'); ?>
		<?php echo $form->textField($model,'employment_status'); ?>
		<?php echo $form->error($model,'employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer'); ?>
		<?php echo $form->textField($model,'employer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_occupation'); ?>
		<?php echo $form->textField($model,'employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employment_occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_work_years'); ?>
		<?php echo $form->textField($model,'employment_work_years'); ?>
		<?php echo $form->error($model,'employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_telephone'); ?>
		<?php echo $form->textField($model,'employment_telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employment_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_insurance'); ?>
		<?php echo $form->textField($model,'employment_insurance'); ?>
		<?php echo $form->error($model,'employment_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employment_disability'); ?>
		<?php echo $form->textField($model,'employment_disability'); ?>
		<?php echo $form->error($model,'employment_disability'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_pension'); ?>
		<?php echo $form->textField($model,'employee_pension'); ?>
		<?php echo $form->error($model,'employee_pension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correspondence_language'); ?>
		<?php echo $form->textField($model,'correspondence_language'); ?>
		<?php echo $form->error($model,'correspondence_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->  textArea($model,'comments',array('rows'=>3, 'cols'=>35)); ?>
                <?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_firstname'); ?>
		<?php echo $form->textField($model,'spouse_firstname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_lastname'); ?>
		<?php echo $form->textField($model,'spouse_lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_address'); ?>
		<?php echo $form->textField($model,'spouse_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_marital_status'); ?>
		<?php echo $form->textField($model,'spouse_marital_status'); ?>
		<?php echo $form->error($model,'spouse_marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_monthly_income'); ?>
		<?php echo $form->error($model,'spouse_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->error($model,'spouse_gross_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_status'); ?>
		<?php echo $form->textField($model,'spouse_employment_status'); ?>
		<?php echo $form->error($model,'spouse_employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employer'); ?>
		<?php echo $form->textField($model,'spouse_employer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_occupation'); ?>
		<?php echo $form->textField($model,'spouse_employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_employment_occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_employment_work_years'); ?>
		<?php echo $form->textField($model,'spouse_employment_work_years'); ?>
		<?php echo $form->error($model,'spouse_employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_number_of_children'); ?>
		<?php echo $form->textField($model,'spouse_number_of_children'); ?>
		<?php echo $form->error($model,'spouse_number_of_children'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_drivers_licence'); ?>
		<?php echo $form->textField($model,'spouse_drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'spouse_drivers_licence'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_active_duty'); ?>
		<?php echo $form->textField($model,'spouse_active_duty'); ?>
		<?php echo $form->error($model,'spouse_active_duty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spouse_comments'); ?>
		<?php echo $form->  textArea($model,'comments',array('rows'=>3, 'cols'=>35)); ?>
                <?php echo $form->error($model,'spouse_comments'); ?>
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
		<?php echo $form->labelEx($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit_card_number'); ?>
		<?php echo $form->textField($model,'credit_card_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'credit_card_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pension'); ?>
		<?php echo $form->textField($model,'pension',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pension'); ?>
	</div>
-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->