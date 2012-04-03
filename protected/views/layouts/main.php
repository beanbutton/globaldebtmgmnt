<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/form.css" />
		<!--favicon-->
		<link rel="shortcut icon" href="<?php echo Yii::app() -> request -> baseUrl;?>/images/favicon.ico"/>
		<?php if (!Yii::app()->user->isGuest) {
		?>
		<meta http-equiv="refresh" content="<?php echo Yii::app() -> params['session_timeout'];?>;"/>
		<?php }?>

		<title><?php echo CHtml::encode($this -> pageTitle);?></title>
	</head>
	<body>
		<div class="container" id="page">
			<div id="header">
				<div id="logo">
					<?php echo CHtml::encode(Yii::app() -> name);?>
				</div>
			</div><!-- header -->
			<!--mainmenu-->
			<?php $this -> widget('application.extensions.mbmenu.MbMenu', 
			array('items' => array( array('label' => 'Home', 'url' => array('/site/index')), 
			array('label' => 'Clients', 'url' => array('/client/index')), 
			array('label' => 'Creditors', 'url' => array('/creditor/index')), 
			array('label' => 'Debtors', 'items' => 
			array( 
				array('label' => 'Debtor Progress', 'url' => 
				array('/debtorProgress/index')), 
				array('label' => 'Budget Info', 'url' => array('/debtorBudgetInfo/index')), 
				array('label' => 'Program Info', 'url' => array('/debtorProgramInfo/index')),
				 array('label' => 'Amortization', 'url' => array('/amortization/index')), 
				 array('label' => 'Settlement Offer', 'url' => array('/settlementOffer/index')), ), 
				 ), 
			array('label' => 'Admin', 'url' => array('/user/view'), 'items' => array(

				array('label' => 'Manage Users', 'url' => array('/user/index')), 
				array('label' => 'Manage Debtors', 'url' => array('/debtor/index')),
				
				array('label' => 'Manage Debtors Budget Info', 'url' => array('/debtorBudgetInfo/index')), 
				array('label' => 'Manage Debtors Financial Info', 'url' => array('/debtorFinancialInfo/index')), 
				array('label' => 'Manage Debtors Program Info', 'url' => array('/debtorProgramInfo/index')), 
				array('label' => 'Manage Debtors Progress', 'url' => array('/debtorProgress/index')), 
				array('label' => 'Manage Debtors Settlement Offers', 'url' => array('/settlementOffer/index')), 
				array('label' => 'Manage Debtors Settlement Summary', 'url' => array('/settlementOfferSummary/index')), 
				array('label' => 'Manage Amortizations', 'url' => array('/amortization/index')),
 
				array('label' => 'Manage Creditors', 'url' => array('/creditor/index')), 
				array('label' => 'Manage Negotiators', 'url' => array('/negotiator/index')), 
				array('label' => 'Manage Employees', 'url' => array('/employee/index')), 
				
				array('label' => 'Mange Account Payables', 'url' => array('/accountPayable/index')), 
				array('label' => 'Manage Account Receivables', 'url' => array('/accountReceivable/index')), 
				array('label' => 'Manage Reports', 'url' => array('settlementOfferSummary/index')), 
				array('label' => 'Mangage File Uploads', 'url' => array('/fileUploadItem/index')), ), ), 
				array('label' => 'Login', 
					'url' => array('/site/login'), 
					'visible' => Yii::app() -> user -> isGuest), 
					array('label' => 'Logout (' . Yii::app() -> user -> name . ')', 
					'url' => array('/site/logout'), 
					'visible' => !Yii::app() -> user -> isGuest)), ));
			?>

			<!-- mainmenu -->
			<?php if(isset($this->breadcrumbs)):
			?>
			<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, ));?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content;?>

			<div id="footer">
				Copyright &copy; <?php echo date('Y');?>
				by Global Debt Freedom.
				<br/>
				All Rights Reserved.
				<br/>
			</div><!-- footer -->
		</div><!-- page -->
	</body>
</html>