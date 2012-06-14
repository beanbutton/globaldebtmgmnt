<?php $this->pageTitle=Yii::app()->name; ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!-- Tabs -->
	<?php $this -> beginWidget('application.extensions.jui.ETabs', array('name' => 'tabpanel1'));?>
	
		<!-- Debtor Personal Info -->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab1', 'title' => 'Debtor Info'));?>
		<?php $this -> endWidget();?>
		
		
		<!-- DebtorFinancial Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab2', 'title' => 'Financial Info'));?>
		<?php $this -> endWidget();?>
		
		
		<!-- DebtorBudget Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab3', 'title' => 'Budget Info'));?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgram Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab4', 'title' => 'Program Info'));?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgress Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab5', 'title' => 'Progress'));?>
		<?php $this -> endWidget();?>

		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab6', 'title' => 'Amortization')); ?>
		<?php $this -> endWidget();?>
			
		
		<!-- Settlement Offer-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab7', 'title' => 'Settlement Offer'));?>

		<?php $this -> endWidget();?>


		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab8', 'title' => 'Creditors'));?>
		<?php $this -> endWidget();?>

	<!-- END -->
	<?php $this -> endWidget();?>


<!-- /FORM-->
<?php $this->endWidget(); ?>
