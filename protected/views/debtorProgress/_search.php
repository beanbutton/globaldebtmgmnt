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
		<?php echo $form->label($model,'Fk_debtor_id'); ?>
		<?php echo $form->textField($model,'Fk_debtor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_settlement_offer'); ?>
		<?php echo $form->textField($model,'current_settlement_offer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_settlement_perc'); ?>
		<?php echo $form->textField($model,'current_settlement_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_date'); ?>
		<?php echo $form->textField($model,'offer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offer_valid_until_date'); ?>
		<?php echo $form->textField($model,'offer_valid_until_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_debt'); ?>
		<?php echo $form->textField($model,'type_of_debt',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'days_behind'); ?>
		<?php echo $form->textField($model,'days_behind'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'settlement_date'); ?>
		<?php echo $form->textField($model,'settlement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'settlement_amount'); ?>
		<?php echo $form->textField($model,'settlement_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->