<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-progress-form',
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
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList( $model, 'status', 
              $this->getStatus(),
              array('empty' => '(Select a Status)'));
		?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"cal_btn_offerdate","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_date',
                    'button'=>'cal_btn_offerdate',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
    	        <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"cal_btn_offervaliddate","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_offer_valid_until_date',
                    'button'=>'cal_btn_offervaliddate',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'offer_valid_until_date'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'settlement_date'); ?>
		<?php echo $form->textField($model,'settlement_date'); ?>
                <?php echo CHtml::image("images/calendar_btn.jpg","calendar",
                array("id"=>"cal_btn_settlementdate","class"=>"pointer")); ?>
                <?php $this->widget('application.extensions.calendar.SCalendar',
                    array(
                    'inputField'=>'DebtorProgress_settlement_date',
                    'button'=>'cal_btn_settlementdate',
                    'ifFormat'=>'%Y-%m-%d',
                ));
                ?>

		<?php echo $form->error($model,'settlement_date'); ?>
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
		<?php echo $form->labelEx($model,'settlement_amount'); ?>
		<?php echo $form->textField($model,'settlement_amount'); ?>
		<?php echo $form->error($model,'settlement_amount'); ?>
	</div>

	<div class="col">
		<?php echo $form->labelEx($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
		<?php echo $form->error($model,'savings'); ?>
	</div>
	

	<div class="row buttons" style="margin-bottom: 30px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->