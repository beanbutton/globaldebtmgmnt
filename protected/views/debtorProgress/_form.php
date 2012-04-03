<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-progress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo "Debtor: ". $this->debtor_name; ?>

	<div class="row">
		<?php echo CHtml::encode("Debtor");?>
		<?php echo $form->dropDownList($model, 'Fk_debtor_id', 
		CHtml::listData(Debtor::model()->findAll(), 'id', 'file_number'), 
			array('empty'=>'Select Debtor')); ?>
		<?php echo $form -> error($model, 'Fk_debtor_id');?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button1","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_date',
                    'button'=>'c_button1',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
    	        <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button2","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_valid_until_date',
                    'button'=>'c_button2',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_valid_until_date'); ?>
	</div>

        <div class="col">
		<?php echo $form->labelEx($model,'current_settlement_offer'); ?>
		<?php echo $form->textField($model,'current_settlement_offer'); ?>
		<?php echo $form->error($model,'current_settlement_offer'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'current_settlement_perc'); ?>
		<?php echo $form->textField($model,'current_settlement_perc'); ?>
		<?php echo $form->error($model,'current_settlement_perc'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt'); ?>
		<?php echo $form->error($model,'type_of_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
		<?php echo $form->error($model,'total_debt'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'days_behind'); ?>
		<?php echo $form->textField($model,'days_behind'); ?>
		<?php echo $form->error($model,'days_behind'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'settlement_date'); ?>
		<?php echo $form->textField($model,'settlement_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"c_button3","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_settlement_date',
                    'button'=>'c_button3',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'settlement_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'settlement_amount'); ?>
		<?php echo $form->textField($model,'settlement_amount'); ?>
		<?php echo $form->error($model,'settlement_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
		<?php echo $form->error($model,'savings'); ?>
	</div>
	
	<div class="col">	
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList( $model, 'status', 
              array('1' => 'Accepted', '2' => 'Rejected', '3' => 'In Progress'),
              array('empty' => '(Select a Status)'));
		?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->