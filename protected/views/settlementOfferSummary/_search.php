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
		<?php echo $form->label($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'months_to_repay'); ?>
		<?php echo $form->textField($model,'months_to_repay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interest_rate'); ?>
		<?php echo $form->textField($model,'interest_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra_interest_paid'); ?>
		<?php echo $form->textField($model,'extra_interest_paid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ave_settlement'); ?>
		<?php echo $form->textField($model,'ave_settlement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_cost'); ?>
		<?php echo $form->textField($model,'total_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'savings_our_program'); ?>
		<?php echo $form->textField($model,'savings_our_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
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