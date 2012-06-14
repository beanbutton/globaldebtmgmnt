<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'debtor-form', 'enableAjaxValidation' => false, )); ?>

<!-- Spouse Tab-->
<?php $this -> beginWidget('application.extensions.jui.ETab', array('name' => 'tab2', 'title' => 'Spouse Info')); ?>
<p>
	<h5>Debtor Information</h5>
	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_firstname'); ?>
		<?php echo $form -> textField($model, 'spouse_firstname'); ?>
		<?php echo $form -> error($model, 'spouse_firstname'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_lastname'); ?>
		<?php echo $form -> textField($model, 'spouse_lastname'); ?>
		<?php echo $form -> error($model, 'spouse_lastname'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_address'); ?>
		<?php echo $form -> textField($model, 'spouse_address'); ?>
		<?php echo $form -> error($model, 'spouse_address'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_marital_status'); ?>
		<?php echo $form -> textField($model, 'spouse_marital_status'); ?>
		<?php echo $form -> error($model, 'spouse_marital_status'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_monthly_income'); ?>
		<?php echo $form -> textField($model, 'spouse_monthly_income'); ?>
		<?php echo $form -> error($model, 'spouse_monthly_income'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_gross_monthly_income'); ?>
		<?php echo $form -> textField($model, 'spouse_gross_monthly_income'); ?>
		<?php echo $form -> error($model, 'spouse_gross_monthly_income'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_employment_status'); ?>
		<?php echo $form -> textField($model, 'spouse_employment_status'); ?>
		<?php echo $form -> error($model, 'spouse_employment_status'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_employer'); ?>
		<?php echo $form -> textField($model, 'spouse_employer'); ?>
		<?php echo $form -> error($model, 'spouse_employer'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_employment_occupation'); ?>
		<?php echo $form -> textField($model, 'spouse_employment_occupation'); ?>
		<?php echo $form -> error($model, 'spouse_employment_occupation'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_employment_work_years'); ?>
		<?php echo $form -> textField($model, 'spouse_employment_work_years'); ?>
		<?php echo $form -> error($model, 'spouse_employment_work_years'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_number_of_children'); ?>
		<?php echo $form -> textField($model, 'spouse_number_of_children'); ?>
		<?php echo $form -> error($model, 'spouse_number_of_children'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_drivers_licence'); ?>
		<?php echo $form -> textField($model, 'spouse_drivers_licence'); ?>
		<?php echo $form -> error($model, 'spouse_drivers_licence'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_active_duty'); ?>
		<?php echo $form -> textField($model, 'spouse_active_duty'); ?>
		<?php echo $form -> error($model, 'spouse_active_duty'); ?>
	</div>

	<div class="col">
		<?php echo $form -> labelEx($model, 'spouse_comments'); ?>
		<?php echo $form->  textArea($model,'spouse_comments',array('rows'=>3, 'cols'=>35)); ?>
                <?php echo $form -> error($model, 'spouse_comments'); ?>
	</div>
	<em style="font-size: 10px">*Please click create button</em>
</p>

<?php $this -> endWidget('application.extensions.jui.ETab'); ?>
<!-- End tab -->
<?php $this -> endWidget(); ?>
