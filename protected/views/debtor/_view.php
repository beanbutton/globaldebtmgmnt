<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fk_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->Fk_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_number')); ?>:</b>
	<?php echo CHtml::encode($data->file_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drivers_licence')); ?>:</b>
	<?php echo CHtml::encode($data->drivers_licence); ?>
	<br />

	<b><?php echo CHtml::encode( "Create Debtor Financial Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorFinancialInfo/create', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "View Debtor Financial Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorFinancialInfo/view', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "Create Debtor Budget Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorBudgetInfo/create', 'id' => $data->id )); ?>
	<br />

	<b><?php echo CHtml::encode( "View Debtor Budget Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorBudgetInfo/view', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "Create Debtor Program Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorProgramInfo/create', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "View Debtor Program Info" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorProgramInfo/view', 'id' => $data->id )); ?>
	<br />
			
	<b><?php echo CHtml::encode( "Create Debtors Progress" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorProgress/create', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "View Debtors Progress" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('debtorProgress/view', 'id' => $data->id )); ?>
	<br />
	
	
	<b><?php echo CHtml::encode( "Create Amortization" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('amortization/create', 'id' => $data->id )); ?>
	<br />

	<b><?php echo CHtml::encode( "View Amortization" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('amortization/view', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "Create Settlement Offer" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('settlementOffer/create', 'id' => $data->id )); ?>
	<br />		

	<b><?php echo CHtml::encode( "View Settlement Offer" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('settlementOffer/view', 'id' => $data->id )); ?>
	<br />
	
	<b><?php echo CHtml::encode( "View Settlement Offer Summary" ); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('settlementOffer/index', 'id' => $data->id )); ?>
	<br />	
	
	
	
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('social_insurance_number')); ?>:</b>
	<?php echo CHtml::encode($data->social_insurance_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_filed_chapter7')); ?>:</b>
	<?php echo CHtml::encode($data->date_filed_chapter7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_filed_chapter13')); ?>:</b>
	<?php echo CHtml::encode($data->date_filed_chapter13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->home_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->other_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('best_time_to_call')); ?>:</b>
	<?php echo CHtml::encode($data->best_time_to_call); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faxnumber')); ?>:</b>
	<?php echo CHtml::encode($data->faxnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_status')); ?>:</b>
	<?php echo CHtml::encode($data->employment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer')); ?>:</b>
	<?php echo CHtml::encode($data->employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->employment_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_work_years')); ?>:</b>
	<?php echo CHtml::encode($data->employment_work_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_telephone')); ?>:</b>
	<?php echo CHtml::encode($data->employment_telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_insurance')); ?>:</b>
	<?php echo CHtml::encode($data->employment_insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employment_disability')); ?>:</b>
	<?php echo CHtml::encode($data->employment_disability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_pension')); ?>:</b>
	<?php echo CHtml::encode($data->employee_pension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correspondence_language')); ?>:</b>
	<?php echo CHtml::encode($data->correspondence_language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_lastname')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_address')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_monthly_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_gross_monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_gross_monthly_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_status')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employer')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_employment_work_years')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_employment_work_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_number_of_children')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_number_of_children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_drivers_licence')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_drivers_licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_active_duty')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_active_duty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_comments')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit_card_number')); ?>:</b>
	<?php echo CHtml::encode($data->credit_card_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pension')); ?>:</b>
	<?php echo CHtml::encode($data->pension); ?>
	<br />

	*/ ?>

</div>

