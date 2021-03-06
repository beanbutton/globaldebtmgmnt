<?php
	$this -> beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => 'debtorBudgetInfoUpdateDialog',
		'options' => array(
			'title' => 'Update Budget Info', 
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
					.Yii::app()->createUrl("debtorBudgetInfo/admin")
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
            	. Yii::app()->urlManager->createUrl('debtorBudgetInfo/admin')
            	."'; $(this).dialog('close');}",    
        		),
			), 	
		));
	
	// Render the partial
	$this -> renderPartial('_form', array('model' => $model));
	
	//End
	$this->endWidget('zii.widgets.jui.CJuiDialog');
?>