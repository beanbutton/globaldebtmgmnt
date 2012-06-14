<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'debtor-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php $this->beginWidget('application.extensions.jui.ETabs', array('name'=>'tabpanel')); ?>
		<!-- Tabs -->
		<?php $this -> beginWidget('application.extensions.jui.ETab', array('name' => 'tabpanel1', 'title' => 'Debtor Info'));?>
			 <?php $this->renderPartial('/debtor/_tableWidget',array('model'=> $debtorModel));?>
	    <?php $this->endWidget(); ?>
	    
		<!-- DebtorFinancial Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab3', 'title' => 'Financial Info'));?>
			<?php $this->renderPartial('/debtorFinancialInfo/_tableWidget', array('model'=>$debtorFinancialInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorBudget Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab4', 'title' => 'Budget Info'));?>
			<?php $this->renderPartial('/debtorBudgetInfo/_tableWidget', array('model'=>$debtorBudgetInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgram Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab5', 'title' => 'Program Info'));?>
			<?php $this->renderPartial('/debtorProgramInfo/_tableWidget', array('model'=>$debtorProgramInfoModel)); ?>
		<?php $this -> endWidget();?>
		
		<!-- DebtorProgress Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab6', 'title' => 'Progress'));?>
			<?php $this->renderPartial('/debtorProgress/_tableWidget', array('model'=>$debtorProgressModel)); ?>		
		<?php $this -> endWidget();?>

		<!-- Amortization-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab7', 'title' => 'Amortization')); ?>
			 <?php $this->renderPartial('/amortization/_tableWidget',array('model'=> $amortizationModel));?>
		<?php $this -> endWidget();?>
			
		<!-- Settlement Offer-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab8', 'title' => 'Settlement Offer'));?>
			 <?php $this->renderPartial('/settlementOffer/_tableWidget',array('model'=> $settlemenOfferModel, 'creditor' => $creditorModel));?>
		<?php $this -> endWidget();?>

		<!-- Creditor Info-->
		<?php $this -> beginWidget('application.extensions.jui.ETab', 
			array('name' => 'tab9', 'title' => 'Creditors'));?>
			<?php $this->renderPartial('/creditor/_tableWidget', array('model'=>$creditorModel)); ?>
		<?php $this -> endWidget();?>
	

    <?php $this->endWidget('application.extensions.jui.ETabs'); ?>
	<!-- /Tab-->

<?php $this->endWidget(); ?>
<!-- /FORM-->

	