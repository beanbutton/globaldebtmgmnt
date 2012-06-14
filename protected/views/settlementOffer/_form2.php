<div class="form">
	<?php $form = $this -> beginWidget('CActiveForm', array('id' => 'settlement-offer-form', 'enableAjaxValidation' => false, ));?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>
	<?php echo $form -> errorSummary($model);?>

	<div class="first_col">
		<div class="row">
			<?php echo $form -> labelEx($model, 'file_number');?>
			<?php echo $form -> textField($model, 'file_number');?>
			<?php echo $form -> error($model, 'file_number');?>
		</div>
	</div>
	<div class="second_col">
		<fieldset class="smallField col_field">
			<legend>
				Offer Made By
			</legend>
			<label><?php echo $form -> radioButton($model, 'file_number');?>Creditor</label>
			<label><?php echo $form -> radioButton($model, 'file_number');?>Negotiator</label>
		</fieldset>
		<fieldset class="midField col_field">
			<legend>
				Offer Status
			</legend>
			<label><?php echo $form -> radioButton($model, 'file_number');?>In Raview</label>
			<label><?php echo $form -> radioButton($model, 'file_number');?>Accepted <?php echo $form -> textField($model, 'file_number');?>
				<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button1", "class" => "pointer"));?>
				<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'DebtorProgramInfo_monthly_payment_due_date', 'button' => 'c_button1', 'ifFormat' => '%Y-%m-%d', ));?></label>
			<label><?php echo $form -> radioButton($model, 'file_number');?>Declined <?php echo $form -> textField($model, 'file_number');?>
				<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button2", "class" => "pointer"));?>
				<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'DebtorProgramInfo_monthly_payment_due_date', 'button' => 'c_button2', 'ifFormat' => '%Y-%m-%d', ));?></label>
		</fieldset>
		<div class="col_add cc">
			<?php echo('<b>Creditor Name</b>');?>
			<?php echo $form -> textField($model, 'offer_amount');?>
			<?php echo $form -> error($model, 'offer_amount');?>
		</div>
		<div class="col_add">
			<?php echo $form -> labelEx($model, 'offer_date');?>
			<?php echo $form -> textField($model, 'offer_date', array('size' => 10, 'maxlength' => 255));?>
			<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button1", "class" => "pointer"));?>
			<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'SettlementOffer_offer_date', 'button' => 'c_button1', 'ifFormat' => '%Y-%m-%d', ));?>

			<?php echo $form -> error($model, 'offer_date');?>
		</div>
		<div class="col_add">
			<?php echo $form -> labelEx($model, 'valid_date');?>
			<?php echo $form -> textField($model, 'valid_date', array('size' => 10, 'maxlength' => 255));?>
			<?php echo CHtml::image("images/calendar_btn.jpg", "calendar", array("id" => "c_button2", "class" => "pointer"));?>
			<?php $this -> widget('application.extensions.calendar.SCalendar', array('inputField' => 'SettlementOffer_valid_date', 'button' => 'c_button2', 'ifFormat' => '%Y-%m-%d', ));?>

			<?php echo $form -> error($model, 'valid_date');?>
		</div>
	</div>
	<div class="third_col">
		<fieldset class="largeField col_field">
			<legend>
				Creditor/Collector Contract
			</legend>
			<div class="ccadd_col">
				<div class="cc_add">
					<?php echo('<b>First/Last Name</b>');?>
					<?php echo $form -> textField($creditor, 'name');?>
					<?php echo $form -> error($creditor, 'name');?>
				</div>
				<div class="cc_add size-14">
					<?php echo('<b>Phone1</b>');?>
					<?php echo $form -> textField($creditor, 'telephone1', array('size' => 15, 'maxlength' => 255));?>
					<?php echo $form -> error($creditor, 'telephone1');?>
				</div>
				<div class="cc_add size-5">
					<?php echo('<b>Ext</b>');?>
					<?php echo $form -> textField($creditor, 'telephone1_ext', array('size' => 1, 'maxlength' => 30));?>
					<?php echo $form -> error($creditor, 'telephone1_ext');?>
				</div>
				<div class="cc_add size-14">
					<?php echo('<b>Phone2</b>');?>
					<?php echo $form -> textField($creditor, 'telephone2', array('size' => 15, 'maxlength' => 255));?>
					<?php echo $form -> error($creditor, 'telephone2');?>
				</div>
				<div class="cc_add size-5">
					<?php echo('<b>Ext 2</b>');?>
					<?php echo $form -> textField($creditor, 'telephone2_ext', array('size' => 1, 'maxlength' => 30));?>
					<?php echo $form -> error($creditor, 'telephone2_ext');?>
				</div>
			</div>
			<div class="ccadd_col">
				<div class="cc_add">
					<?php echo('<b>Company</b>');?>
					<?php echo $form -> textField($creditor, 'company_name');?>
					<?php echo $form -> error($creditor, 'company_name');?>
				</div>
				<div class="cc_add">
					<?php echo('<b>Address</b>');?>
					<?php echo $form -> textField($creditor, 'address');?>
					<?php echo $form -> error($creditor, 'address');?>
				</div>
				<div class="cc_add size-10">
					<?php echo('<b>City</b>');?>
					<?php echo $form -> textField($creditor, 'city', array('size' => 7, 'maxlength' => 30));?>
					<?php echo $form -> error($creditor, 'city');?>
				</div>
				<div class="cc_add size-14">
					<?php echo('<b>Postal Code</b>');?>
					<?php echo $form -> textField($creditor, 'postal_code', array('size' => 5, 'maxlength' => 30));?>
					<?php echo $form -> error($creditor, 'postal_code');?>
				</div>
			</div>
			<div class="ccadd_col">
				<div class="cc_add">
					<?php echo('<b>ID/Badge Number</b>');?>
					<?php echo $form -> textField($creditor, 'badge_number');?>
					<?php echo $form -> error($creditor, 'badge_number');?>
				</div>
				<div class="cc_add">
					<?php echo('<b>Email Address</b>');?>
					<?php echo $form -> textField($creditor, 'email');?>
					<?php echo $form -> error($creditor, 'email');?>
				</div>
				<div class="cc_add">
					<?php echo('<b>Fax</b>');?>
					<?php echo $form -> textField($creditor, 'faxnumber');?>
					<?php echo $form -> error($creditor, 'faxnumber');?>
				</div>
			</div>
			<div class="ccadd_col">
				<div class="cc_add">
					<?php echo('<b>Comments</b>');?>
					<?php echo $form -> textArea($model, 'offer_amount', array('rows' => 5, 'cols' => 75));?>
					<?php echo $form -> error($model, 'offer_amount');?>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="four_col">
		<div class="offer">
			<?php echo $form -> labelEx($model, 'offer_amount');?>
			<?php echo $form -> textField($model, 'offer_amount', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'offer_amount');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'offer_amount_percentage');?>
			<?php echo $form -> textField($model, 'offer_amount_percentage', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'offer_amount_percentage');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'client_saving_amonut');?>
			<?php echo $form -> textField($model, 'client_saving_amonut', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'client_saving_amonut');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'client_savings_percentage');?>
			<?php echo $form -> textField($model, 'client_savings_percentage', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'client_savings_percentage');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'client_reserves');?>
			<?php echo $form -> textField($model, 'client_reserves', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'client_reserves');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'service_fees');?>
			<?php echo $form -> textField($model, 'service_fees', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'service_fees');?>
		</div>
		<div class="offer">
			<?php echo $form -> labelEx($model, 'difference_amount');?>
			<?php echo $form -> textField($model, 'difference_amount', array('size' => 15, 'maxlength' => 30));?>
			<?php echo $form -> error($model, 'difference_amount');?>
		</div>
	</div>
	<div class="first_col" style="clear: both">
		<div class="row">
			<?php echo CHtml::submitButton($model -> isNewRecord ? 'Create' : 'Save');?>
			<?php echo CHtml::submitButton($model -> isNewRecord ? 'View Notes' : 'Save');?>
			<?php echo CHtml::submitButton($model -> isNewRecord ? 'Add Report' : 'Save');?>
		</div>
	</div>
	<?php $this -> endWidget();?>
</div>
