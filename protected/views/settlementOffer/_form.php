<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settlement-offer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabel($model,'Fk_debtor_id',array('label'=>'Debtor File#'))?>
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>

	<div class="col">	
		<?php echo $form->labelEx($model,'offer_status'); ?>
		<?php echo $form->dropDownList( $model, 'offer_status', 
              $this->getStatus(),
              array('empty' => '(Select a Status)'));
		?>
	</div>
	
	<div class="col">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'SettlementOffer_offer_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_date'); ?>
	</div>
	
	
	<div class="col">
		<?php echo $form->labelEx($model,'valid_date'); ?>
		<?php echo $form->textField($model,'valid_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'SettlementOffer_valid_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'valid_date'); ?>
	</div>
	
	

	<div class="row">
		<?php echo $form->labelEx($model,'offer_amount'); ?>
		<?php echo $form->textField($model,'offer_amount'); ?>
		<?php echo $form->error($model,'offer_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offer_amount_percentage'); ?>
		<?php echo $form->textField($model,'offer_amount_percentage'); ?>
		<?php echo $form->error($model,'offer_amount_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_saving_amonut'); ?>
		<?php echo $form->textField($model,'client_saving_amonut'); ?>
		<?php echo $form->error($model,'client_saving_amonut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_savings_percentage'); ?>
		<?php echo $form->textField($model,'client_savings_percentage'); ?>
		<?php echo $form->error($model,'client_savings_percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_reserves'); ?>
		<?php echo $form->textField($model,'client_reserves'); ?>
		<?php echo $form->error($model,'client_reserves'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_fees'); ?>
		<?php echo $form->textField($model,'service_fees'); ?>
		<?php echo $form->error($model,'service_fees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difference_amount'); ?>
		<?php echo $form->textField($model,'difference_amount'); ?>
		<?php echo $form->error($model,'difference_amount'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->