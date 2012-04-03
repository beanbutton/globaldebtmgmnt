<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!-- Tabs -->
	<?php $this -> beginWidget('application.extensions.jui.ETabs', array('name' => 'tabpanel1'));?>
	
		<!-- Debtor Personal Info -->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab1', 'title' => 'Debtor Info'));?>
			<?php $this->renderPartial('/debtor/view', array('model'=>$debtorModel)); ?>
		<?php $this -> endWidget();?>
		
		
		<!-- DebtorFinancial Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab2', 'title' => 'Financial Info'));?>
			<?php $this->renderPartial('/debtorFinancialInfo/view', array('model'=>$debtorFinancialInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		
		<!-- DebtorBudget Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab3', 'title' => 'Budget Info'));?>
			<?php $this->renderPartial('/debtorBudgetInfo/view', array('model'=>$debtorBudgetInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgram Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab4', 'title' => 'Program Info'));?>
			<?php $this->renderPartial('/debtorProgramInfo/view', array('model'=>$debtorProgramInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgress Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab5', 'title' => 'Progress'));?>
			<?php $this->renderPartial('/debtorProgress/view', array('model'=>$debtorProgressModel)); ?>		
		<?php $this -> endWidget();?>


	<!-- END -->
	<?php $this -> endWidget();?>


<!-- /FORM-->
<?php $this->endWidget(); ?>

	<!-- Tabs -->
<?php $this -> beginWidget('application.extensions.jui.ETabs', array('name' => 'tabpanel2'));?>
				<!-- Settlement Offer-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab6', 'title' => 'Amortization')); ?>
			 <?php $this->renderPartial('/amortization/view',array('model'=> $amortizationModel));?>
		<?php $this -> endWidget();?>
			
		
		<!-- Settlement Offer-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab7', 'title' => 'Settlement Offer'));?>
		<?php $this -> endWidget();?>
		
		
		<!-- Settlement Offer Summary-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab8', 'title' => 'Summary'));?>
		<?php $this -> endWidget();?>
	
<?php $this->endWidget(); ?>


	<!-- Tabs -->
<?php $this -> beginWidget('application.extensions.jui.ETabs', array('name' => 'tabpanel3'));?>
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab1', 'title' => 'Creditors'));?>
			<?php $this->renderPartial('/creditor/view', array('model'=>$debtorCreditorModel)); ?>
		<?php $this -> endWidget();?>
	
<?php $this->endWidget(); ?>
