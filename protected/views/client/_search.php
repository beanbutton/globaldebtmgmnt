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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_number'); ?>
		<?php echo $form->textField($model,'file_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'savings'); ?>
		<?php echo $form->textField($model,'savings'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigned_to'); ?>
		<?php echo $form->textField($model,'assigned_to',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negotiator'); ?>
		<?php echo $form->textField($model,'negotiator',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_services'); ?>
		<?php echo $form->textField($model,'client_services',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_managers'); ?>
		<?php echo $form->textField($model,'account_managers',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_debt'); ?>
		<?php echo $form->textField($model,'total_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_debt'); ?>
		<?php echo $form->textField($model,'original_debt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enrollment_date'); ?>
		<?php echo $form->textField($model,'enrollment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
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