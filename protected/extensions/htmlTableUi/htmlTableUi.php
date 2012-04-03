<?php
/**
 * HtmlTable class file.
 *
 * @author Jose Rullan <jose.rullan@invisioneng.com>
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy;
 */


class HtmlTableUi extends CWidget
{
	
	// <--------Attributes----------->
	
	public $ajaxUrl;
	
	/*
	* arProvider
	*
	* This parameter is a CActiveDataProvider instance
	* If this parameter is set, then the widget will try
	* to render a table based on this data provider.
	*/
	public $arProvider;
		
	/*
	 * collapsed
	 * 
	 * This parameter sets the default state of the table.
	 * if true, the table will be collapsed,
	 * otherwise it will be expanded.
	 */
	public $collapsed = false;

	/*
	 * columns
	 * 
	 * This parameter is an array of column names.
	 */
	public $columns = array();

	/*
	 * enableSort
	 * 
	 * This parameter is used to add the
	 * TableSorter2.0 script to the table.
	 */
	public $enableSort = true;

	/*
	 * editMode
	 * 
	 * This parameter indicates the default
	 * table mode.
	 * true - enable edit controls
	 */
	public $editable = false;

	/*
	 * editMode
	 * 
	 * This parameter indicates the default
	 * table mode.
	 * true - Edit Mode
	 * false - View mode
	 */
	public $editMode = false;

	/*
	 * enablePager
	 * 
	 * This parameter determines if the table will 
	 * be paged.
	 */
	public $enablePager = false;
	
	/*
	 * footer
	 * 
	 * This parameter is the footer of the table.
	 */
	public $extra;
	
	public $formTitle="Edit Row";
	
	/*
	 * footer
	 * 
	 * This parameter is the footer of the table.
	 */
	public $footer = '';
	

	public $pageSize = 10;

	/*
	 * rowsArrray
	 * 
	 * This parameter is an array of data values to be plotted in the 
	 * table as rows.
	 */
	public $rows = array();

	
	/*
	 * sortColumn
	 * 
	 * This parameter indicates the default
	 * sorting column.
	 */
	public $sortColumn = 0;
	
	/*
	 * sortColumn
	 * 
	 * This parameter indicates the default
	 * sorting column.
	 */
	public $sortOrder = 'asc';

	/*
	 * subtitle
	 * 
	 * This parameter is the subtitle of the table.
	 */
	public $subtitle = '';
	
	/*
	 * title
	 * 
	 * This parameter is the title of the table.
	 */
	public $title = '';
	
	// <-------------------------->
	
	/*
	 * cssFile
	 * 
	 * This parameter is the CSS file to be used for the table.
	 */
	public $cssFile;
	
	/*
	 * useInternalCss
	 * 
	 * This parameter will enable the use of the included styling of the table. 
	 * If false (default), the widget will require the use of a cssFile using 
	 * a jQuery UI theme, otherwise it will expect such a css loaded in the app. 
	 */
	public $useInternalCss=false;
	
	/*
	 * closeImg, openImg
	 * 
	 * These attributes hold the images to be used as icons
	 * for collapsing and expanding the table.
	 */
	protected $hideImg;
	
	protected $showImg;

	protected $initialSort = 0;
	
	
	
	
	// <--------Methods----------->
	
	/*
	 * init()
	 * 
	 * This function overrides the CWidget::init() function.
	 * Used to perform any required initialization.
	 */
	public function init(){
		parent::init();
		// If a CActiveDataProvider is set, use it for
		// columns and rows.
		if(isset($this->arProvider)&&!empty($this->arProvider)){
			$this->columns = $this->getArColumns($this->arProvider);
			$this->rows = $this->getArRows($this->arProvider);
			if(!isset($this->title)||empty($this->title)){
				$this->title = get_class($this->arProvider->model);
			}
		}
		$this->getId();
		
		// Appearance Rules
		if(!$this->editable) $this->editMode = false;
		if($this->editMode) $this->collapsed = false;
		
		// Register scripts
		$this->registerClientScript();
	}
	
	/*
	 * run()
	 * 
	 * This function overrides the CWidget::run() function.
	 * This function is called by Yii when its time to draw the
	 * widget.
	 */
	public function run(){
		$this->renderTable();
	}
	
	
	// <------------- Utility methods -------------->

	/**
	 * This is a helper function for getting
	 * columns values from an CActiveDataProvider
	 */
	protected function getArColumns($arProvider){
		// 1. Get Columns based on the Data arProvider's model
		$class = get_class($arProvider->model);
		unset($columns);
		// Used this approach instead of the commented code below
		// to support PHP < 5.3. The commented syntax works
		// only in PHP 5.3+. -- Thanks to Pomstiborius who brought it
		// to my attention.
		$modelInst = call_user_func(array($class, 'model'));
		/*
		foreach($class::model()->attributes as $column=>$value){
			$columns[]=$column;
		}
		 */
		foreach($modelInst->attributes as $column=>$value){
			$columns[]=$column;
		}
		return $columns;
	}
	
	/**
	 * This is a helper function for getting
	 * rows values from an CActiveDataProvider
	 */
	protected function getArRows($arProvider){
		// 2. Get Rows based on Data arProvider
		unset($rows);
		$arRecords = $arProvider->getData();
		foreach($arRecords as $record){
			$rows[]=$record->attributes;
		}
		return $rows;		
	}
	
	
	/*
	 * registerClientScript
	 * 
	 * This function is used tu register the CSS and JS
	 * scripts used in this Widget.
	 */
	protected function registerClientScript(){

		$assetsDir=dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
        $assetsDir=Yii::app()->getAssetManager()->publish($assetsDir);
		
        $this->hideImg=$assetsDir.'/img/hidearrow.png';
        $this->showImg=$assetsDir.'/img/showarrow.png';
		
		/*
		 * Used to register "web accessible" files
		 * meaning they are located above the protected directory
		 * Other files like extensions are protected and need to be
		 * published as assetts first.
		 * 
		 */
       	$cs = Yii::app()->clientScript;

		// Publish and set the CSS file for this extension
		if(!$this->useInternalCss){
			if(isset($this->cssFile)){
				$path = Yii::app()->baseUrl.$this->cssFile;
				$cs->registerCssFile($path);
			}
		}else{
			$path = $assetsDir.'/css/default/jquery-ui.css';
			$cs->registerCssFile($path);
		}
		
		// Publish and set the CSS file for this extension
		$cs->registerCssFile($assetsDir.'/css/htmlTableUi.css');
		
		// Register jQuery which will be used by the widget's code
		$cs->registerCoreScript('jquery');

		//$cs->registerScriptFile($assetsDir.'/js/jquery-1.6.2.min.js',CClientScript::POS_HEAD);

		// Publish and register the jQuery UI custom library
		// used for sliding transition
		$cs->registerScriptFile($assetsDir.'/js/jquery-ui-1.8.16.custom.min.js',CClientScript::POS_HEAD);
				
		// Publish and register the table sorter library
		$cs->registerScriptFile($assetsDir.'/js/jquery.tablesorter.js',CClientScript::POS_HEAD);

		// Publish and register the table sorter library
		$cs->registerScriptFile($assetsDir.'/js/jquery.tablesorter.pager.js',CClientScript::POS_HEAD);

		// Publish and register the widget code
		$cs->registerScriptFile($assetsDir.'/js/htmlTableUi.js',CClientScript::POS_HEAD);
		
		// Publish and register the widget sort script
		// Note to work, tablesorter needs thead to have th, not td
		if($this->sortOrder == 'desc'){
			$this->initialSort = 1;
		}else{
			$this->initialSort = 0;
		}
		
		$sortScript = '
			htmltableUiSort(\''.$this->getId().'\','.$this->sortColumn.','.$this->initialSort.');
		';
		// Register sorting script if sort is enabled.
		if($this->enableSort){
			$cs->registerScript($this->getId().'-sortTable',$sortScript,CClientScript::POS_READY);
		}
		
		// Pager script
		$pagerScript = '
			htmltablePager(\''.$this->getId().'\','.$this->pageSize.');
		';
		// Register sorting script if sort is enabled.
		if($this->enableSort&&$this->enablePager){
			$cs->registerScript($this->getId().'-pagerTable',$pagerScript,CClientScript::POS_READY);
		}
		
		$formPositionScript = '
			$( "#edit-form" ).bind( "dragstop", function(event, ui) {
    			//alert(ui.offset.top);
				htmltableUi_globalLastPos = ui.offset;
    		});
		';
		$cs->registerScript($this->getId().'-formPosition',$formPositionScript,CClientScript::POS_READY);

	}
	
	/*
	 * renderTable
	 * 
	 * This function creates the HTML Table.
	 */
	protected function renderTable(){
		$countColumns = count($this->columns);
		$header = '';
		$footerSpan = $countColumns;
		
		//<----- FORM ----->
		echo CHtml::openTag('div',array('id'=>'edit-form','class'=>'form ui-widget ui-draggable','style'=>'display:none;'));
			echo CHtml::openTag('div',array('class'=>'ui-widget-header ui-corner-top'));	
				//echo CHtml::tag('p',array());
			echo CHtml::closeTag('div');
			echo CHtml::tag('form',array('id'=>'table-form','class'=>'ui-widget-content ui-corner-bottom'));
		echo CHtml::closeTag('div');		

		// Set the widget's id
		echo CHtml::openTag('div',array('id'=>$this->getId(),'class'=>'htmltabledivui ui-widget'));
		
			//<----- HEADER ----->
			echo CHtml::openTag('div',array('class'=>'header ui-widget-header ui-corner-top','style'=>'cursor:pointer;',));
				echo "<table class='header-table'><tbody>";
				echo CHtml::openTag('tr',array());
					echo CHtml::openTag('td',array('onclick'=>'htmltableUiToggleDiv("'.$this->getId().'");'));
						echo CHtml::openTag('div',array('class'=>'header-container',));
							/*
							 * The header of the table has three elements:
							 * 1. The table title
							 * 2. A button for hiding the table
							 * 3. A button for showing the table
							 * 
							 * If the "collapsed" property is set to true,
							 * the "hidecontrol" will be hidden (e.g. display=none)
							 * and the "showcontrol" will be shown (e.g. display=block)
							 * Else
							 * the "showcontrol" will be hidden (e.g. display=none)
							 * and the "hidecontrol" will be shown (e.g. display=block)
							 * 
							 * The enclosing <div> has an onClick event attached to a javascript
							 * function called "toggleBody".
							 * This function requires the id of the table to hide or show.
							 * The script determines the current display attribute (none or block)
							 * of the table body and toggles it. It also sets the corresponding 
							 * control.
							 */
							
							echo CHtml::tag('span',array(),$this->title);
							
							// Buttons for collapsibility
							$display = $this->collapsed ? "none" : "block";
							echo CHtml::openTag('div',array('style'=>'display:'.$display,'id'=>'hidecontrol','class'=>'controls'));
							echo CHtml::tag('span',array(),CHtml::image($this->hideImg,'',array()));
							echo CHtml::closeTag('div');
							
							$display = $this->collapsed ? "block" : "none";
							echo CHtml::openTag('div',array('style'=>'display:'.$display,'id'=>'showcontrol','class'=>'controls'));
							echo CHtml::tag('span',array(),CHtml::image($this->showImg,'',array()));
							echo CHtml::closeTag('div');
							
							$extra = isset($this->extra)&&!empty($this->extra) ? $this->extra : 'Rows:'.count($this->rows);
							echo CHtml::openTag('div',array('id'=>'htmltable-extra','class'=>'extra'));
							echo CHtml::tag('span',array(),$extra);
							echo CHtml::closeTag('div');
						
						echo CHtml::closeTag('div');	
					echo CHtml::closeTag('td');
					
					if($this->editable){
						// Mode Button
						echo CHtml::openTag('td',array('class'=>'header-mode','width'=>'20px'));
							$modeClass = $this->editMode ? "editmode" : "";
							echo CHtml::openTag('div',array('class'=>'header-mode-button '.$modeClass,
														'onclick'=>'htmltableUiToggleMode("'.$this->getId().'");'));
							echo CHtml::closeTag('div');
						echo CHtml::closeTag('td');
						// Send Button
						echo CHtml::openTag('td',array('class'=>'header-mode','width'=>'20px'));
							$modeClass = $this->editMode ? "editmode" : "";
							echo CHtml::openTag('div',array(
								'id'=>$this->getId().'-send-button',
								'class'=>'header-send-button',
								'style'=>'display:none;',
								//'onclick'=>'htmltableUiSend("'.$this->getId().'","'.$this->ajaxUrl.'","'.$this->ajaxContainer.'");'));
								'onclick'=>'htmltableUiSend("'.$this->getId().'","'.$this->ajaxUrl.'");'));
							echo CHtml::closeTag('div');
						echo CHtml::closeTag('td');
					}
				echo CHtml::closeTag('tr');
				echo "</tbody></table>";
			echo CHtml::closeTag('div');
		
			//<----- BODY ------>
			$display = $this->collapsed ? "none" : "block";
			echo CHtml::openTag('div',array('class'=>'body ui-widget-content ui-corner-bottom','style'=>'display:'.$display.';'));
				echo CHtml::openTag('table',array('id'=>$this->getId().'-body-table','class'=>'body-table'));
	
					// Table Header name
					echo CHtml::openTag('thead',array());
					// Subtitle - is a td to avoid tablesorter to activate upon it
					$display = $this->collapsed ? "table-row" : "table-row";
					if(isset($this->subtitle)&&!empty($this->subtitle)){
						echo CHtml::tag('tr',array('class'=>'body-subtitle','style'=>'display:'.$display),CHtml::tag('td',array('colspan'=>$countColumns),$this->subtitle));
					}
					// Columns header
					if(isset($this->columns)){
						// Table Header: Form the table columns data to show table columns
						// need to be th for tableSorter to work.
						foreach($this->columns as $columnName){
							$columnData = CHtml::tag('div',array('class'=>'column-name'),'<span>'.$columnName.'</span>').CHtml::tag('div',array('class'=>'column-sort-image'));
							$columnData = CHtml::tag('div',array('class'=>'column-data'),$columnData);
							$header .= CHtml::tag('th',array('class'=>'unsorted ui-widget-header'),$columnData);
						}
						echo CHtml::tag('tr',array('class'=>'body-header'),$header);
					}					
					echo CHtml::closeTag('thead',array());
					
					// Table Footer
					$display = $this->collapsed ? "table-footer-group" : "table-footer-group";
					if(isset($this->footer)&&!empty($this->footer)){
						echo CHtml::openTag('tfoot',array('style'=>'display:'.$display));
							$footerData = CHtml::tag('td',array('colspan'=>($footerSpan), 'align'=>'right'),$this->footer);
							echo CHtml::tag('tr',array('class'=>'body-footer'),$footerData);
						echo CHtml::closeTag('tfoot');
					}		
	
					// Table Body
					$display = $this->collapsed ? "table-row-group" : "table-row-group";
					echo CHtml::openTag('tbody',array('style'=>'display:'.$display));
					
					// Table Rows
					if(count($this->rows)){
						$alt = false;

						$pagesize = $this->pageSize;
						
						foreach($this->rows as $row){

							// Apply classes to rows: even, odd, editrow, pagedrow
						   	if($alt){
						   		$rowClass = $this->enableSort ? '' : 'even-row';
								$alt = false;
							}else{
						   		$rowClass = $this->enableSort ? '' : 'odd-row';
								$alt = true;
							}
							if($this->editMode){
								$rowClass .= ' editrow';
								//$onClick = 'toggleForm("'.$this->getId().'");';
							}
							
							// To continue if TableSorter pager doesn't work
							if($this->enablePager){
								if($pagesize>0){
									//$rowClass .= ' visiblerow';
									//$pagesize--;
								}else{
									//$rowClass .= ' hiddenrow';
								}
							}


							$rowOptions = array('class'=> $rowClass,'onclick'=>'htmltableShowUiForm("'.$this->getId().'",this,"'.$this->formTitle.'");');
							//if($this->editMode) $rowOptions['onclick']=$onClick;
						   	echo CHtml::openTag('tr',$rowOptions);
							
							// Draw all the record data
							if(count($row)){
								foreach($row as $value){
									echo CHtml::tag('td',array(),$value);
								}
							}
							// Close the row
							echo CHtml::closeTag('tr');
						}
					}
	
					echo CHtml::closeTag('tbody',array());
				echo CHtml::closeTag('table',array());
				// Pager
				if($this->enablePager){
					echo CHtml::openTag('div',array('id'=>$this->getId().'-pager','class'=>'pager'));
						echo "<div class='first'>First</div>";
						echo "<div class='prev'>Previous</div>";
						echo "<div class='next'>Next</div>";
						echo "<div class='last'>Last</div>";
					echo CHtml::closeTag('div');
				}
			echo CHtml::closeTag('div');
		echo "</div>";
		
	}

}

?>