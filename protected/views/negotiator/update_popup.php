<?php
	$this -> beginWidget('zii.widgets.jui.CJuiDialog', array(
		'id' => 'creditorUpdateDialog',
		'options' => array(
			'title' => 'Update Negotiator', 
			'width' => 820,
			'height' => 600,
			'autoOpen' => true, 
			'resizable'=>false,
			'modal'=>true,
			
			// Redirect on popup window close 
			'closeOnEscape' => true,  			
			'open'=> "js:function(event) 
				{ $('.ui-dialog-titlebar-close').click(function() 
					{ location.href = '"
					.Yii::app()->createUrl("negotiator/admin")
					."'; })}",   
			
			'overlay'=>array(
            	'backgroundColor'=>'#000',
            	'opacity'=>'0.5'
        		),
			
			'overlay'=>array(
            	'backgroundColor'=>'#000',
            	'opacity'=>'0.5'
        		),
        
        	'buttons'=>array(
            	//'Update'=>"js:function(){ location.href='"
            	//. Yii::app()->urlManager->createUrl('amortization/admin')
            	//."'; $(this).dialog('close');}",  
            	'Cancel'=>"js:function(){ location.href='"
            	. Yii::app()->urlManager->createUrl('negotiator/admin')
            	."'; $(this).dialog('close');}",    
        		),
			), 	
		));
	
	// Render the partial
	$this -> renderPartial('_form', array('model' => $model));
	
	//End
	$this->endWidget('zii.widgets.jui.CJuiDialog');
?>