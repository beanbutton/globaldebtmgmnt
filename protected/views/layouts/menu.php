<?php $this -> widget('application.extensions.mbmenu.MbMenu', 
		array('items' => array( array('label' => 'Home', 'url' => array('/site/index')), 
		array('label' => 'Clients', 'url' => array('/client/index')), 
		array('label' => 'Creditors', 'url' => array('/creditor/admin')), 
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
		
		array('label' => 'Manage Users', 'url' => array('/user/admin')), 
		array('label' => 'Manage Debtors', 'url' => array('/debtor/admin')),
		
		array('label' => 'Manage Debtors Budget Info', 'url' => array('/debtorBudgetInfo/admin')), 
		array('label' => 'Manage Debtors Financial Info', 'url' => array('/debtorFinancialInfo/admin')), 
		array('label' => 'Manage Debtors Program Info', 'url' => array('/debtorProgramInfo/admin')), 
		array('label' => 'Manage Debtors Progress', 'url' => array('/debtorProgress/admin')), 
		array('label' => 'Manage Debtors Settlement Offers', 'url' => array('/settlementOffer/admin')), 
		array('label' => 'Manage Debtors Settlement Summary', 'url' => array('/settlementOfferSummary/admin')), 
		array('label' => 'Manage Amortizations', 'url' => array('/amortization/admin')),
		 
		array('label' => 'Manage Creditors', 'url' => array('/creditor/admin')), 
		array('label' => 'Manage Negotiators', 'url' => array('/negotiator/admin')), 
		array('label' => 'Manage Employees', 'url' => array('/employee/admin')), 
		
		array('label' => 'Mange Account Payables', 'url' => array('/accountPayable/admin')), 
		array('label' => 'Manage Account Receivables', 'url' => array('/accountReceivable/admin')), 
		array('label' => 'Manage Reports', 'url' => array('settlementOfferSummary/admin')), 
		array('label' => 'Mangage File Uploads', 'url' => array('/fileUploadItem/admin')), ), ), 
		array('label' => 'Login', 
		'url' => array('/site/login'), 
		'visible' => Yii::app() -> user -> isGuest), 
		array('label' => 'Logout (' . Yii::app() -> user -> name . ')', 
		'url' => array('/site/logout'), 
		'visible' => !Yii::app() -> user -> isGuest)), ));
?>
