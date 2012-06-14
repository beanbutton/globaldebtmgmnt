<?php
	$this -> beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => 'settlementOfferUpdateDialog',
		'options' => array(
			'title' => 'Update Debtor Financial Info', 
			'width' => 'auto',
			'height' => 600,
			'autoOpen' => true, 
			'resizable'=> true,
			'modal'=>true,
			
			// Redirect on popup window close 
			'closeOnEscape' => true,  
			'open'=> "js:function(event) 
				{ $('.ui-dialog-titlebar-close').click(function() 
					{ location.href = '"
					.Yii::app()->createUrl("debtorFinancialInfo/admin")
					."'; })}",   
			
			'overlay'=>array(
            	'backgroundColor'=>'#000',
            	'opacity'=>'0.5'
        		),
        
        	'buttons'=>array(
            	//'Update'=>"js:function(){ location.href='"
            	//. Yii::app()->urlManager->createUrl('settlementOffer/admin')
            	//."'; $(this).dialog('close');}",  
            	'Cancel'=>"js:function(){ location.href='"
            	. Yii::app()->urlManager->createUrl('debtorFinancialInfo/admin')
            	."'; $(this).dialog('close');}",    
        		),
			), 	
		));
	
	// Render the partial
	$this -> renderPartial('_form', array('model' => $model));
	
	//End
	$this->endWidget('zii.widgets.jui.CJuiDialog');
?>