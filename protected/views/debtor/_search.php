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
		<?php echo $form->label($model,'Fk_user_id'); ?>
		<?php echo $form->textField($model,'Fk_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drivers_licence'); ?>
		<?php echo $form->textField($model,'drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'social_insurance_number'); ?>
		<?php echo $form->textField($model,'social_insurance_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_filed_chapter7'); ?>
		<?php echo $form->textField($model,'date_filed_chapter7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_filed_chapter13'); ?>
		<?php echo $form->textField($model,'date_filed_chapter13'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_telephone'); ?>
		<?php echo $form->textField($model,'home_telephone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_telephone'); ?>
		<?php echo $form->textField($model,'mobile_telephone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_telephone'); ?>
		<?php echo $form->textField($model,'other_telephone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'best_time_to_call'); ?>
		<?php echo $form->textField($model,'best_time_to_call',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faxnumber'); ?>
		<?php echo $form->textField($model,'faxnumber',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_status'); ?>
		<?php echo $form->textField($model,'employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer'); ?>
		<?php echo $form->textField($model,'employer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_occupation'); ?>
		<?php echo $form->textField($model,'employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_work_years'); ?>
		<?php echo $form->textField($model,'employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_telephone'); ?>
		<?php echo $form->textField($model,'employment_telephone',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_insurance'); ?>
		<?php echo $form->textField($model,'employment_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employment_disability'); ?>
		<?php echo $form->textField($model,'employment_disability'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_pension'); ?>
		<?php echo $form->textField($model,'employee_pension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correspondence_language'); ?>
		<?php echo $form->textField($model,'correspondence_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_firstname'); ?>
		<?php echo $form->textField($model,'spouse_firstname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_lastname'); ?>
		<?php echo $form->textField($model,'spouse_lastname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_address'); ?>
		<?php echo $form->textField($model,'spouse_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_marital_status'); ?>
		<?php echo $form->textField($model,'spouse_marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_gross_monthly_income'); ?>
		<?php echo $form->textField($model,'spouse_gross_monthly_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_status'); ?>
		<?php echo $form->textField($model,'spouse_employment_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employer'); ?>
		<?php echo $form->textField($model,'spouse_employer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_occupation'); ?>
		<?php echo $form->textField($model,'spouse_employment_occupation',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_employment_work_years'); ?>
		<?php echo $form->textField($model,'spouse_employment_work_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_number_of_children'); ?>
		<?php echo $form->textField($model,'spouse_number_of_children'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_drivers_licence'); ?>
		<?php echo $form->textField($model,'spouse_drivers_licence',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_active_duty'); ?>
		<?php echo $form->textField($model,'spouse_active_duty'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spouse_comments'); ?>
		<?php echo $form->textField($model,'spouse_comments',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit_card_number'); ?>
		<?php echo $form->textField($model,'credit_card_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pension'); ?>
		<?php echo $form->textField($model,'pension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->