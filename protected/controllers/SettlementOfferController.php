<?php

class SettlementOfferController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';
	public $debtor_name;

	public function getStatus() {
		return GlobalDebtManagementUtils::getStatus();
	}

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl',        // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array(
		//array('allow', // allow all users to perform 'index' and 'view' actions
		//'actions' => array('index', 'view'), 'users' => array('*'), ),
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('index', 'view'), 'users' => array('@'), ), array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'index', 'view', 'create', 'update', 'delete', 'generatePdf'), 'users' => array('admin'), ), array('deny', // deny all users
		'users' => array('*'), ), );
	}

	public function loadDebtor($id) {
		$debtor = Debtor::model() -> findByPk($id);
		if ($debtor === null) {
			throw new CHttpException(404, 'Debtor not found!');
		}
		return $debtor;
	}

	public function loadCreditor($id) {
		$creditor = Creditor::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($creditor === null) {
			throw new CHttpException(404, 'Credtior not found!');
		}
		return $creditor;
	}
	
	public function loadDebtorFinancialInfo($id) {
		$info = DebtorFinancialInfo::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($info === null) {
			throw new CHttpException(404, 'Debtor Financial Info not found!');
		}
		return $info;
	}

	public function generateHtmlTemplate($debtor, $creditor, $financialInfo, $settlementOffer)
	{
		$table_header = "<table width='900' border='0' align='center' cellspacing='0'>";
		$table_footer= "</table>";
		$content = '';
                $content .= "<tr>
                            <td height='43' colspan='2' align='center' bgcolor='#999999' ><h3><strong>Settlement Offers</strong></h3></td>
                            </tr>
                            <tr>
                             <td width='450'>&nbsp;</td>
                             <td width='450'>&nbsp;</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Client Name:</strong> $debtor->firstname $debtor->lastname</td>
                            <td><strong>Client ID:</strong> $debtor->file_number</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Creditor Name:</strong> $creditor->name</td>
                            <td><strong>Account Number:</strong> $financialInfo->account_number</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Offer Date:</strong> $settlementOffer->offer_date</td>
                            <td><strong>Valid Until:</strong> $settlementOffer->valid_date</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Status:</strong> $settlementOffer->offer_status</td>
                            <td>&nbsp;</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Settlement Offer (\$):</strong> $settlementOffer->offer_amount</strong></td>
                            <td><strong>Settlement Offer (%):</strong> $settlementOffer->offer_amount_percentage</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Client Savings (\$):</strong> $settlementOffer->client_saving_amonut</td>
                            <td><strong>Client Savings (%):</strong> $settlementOffer->client_savings_percentage</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Client Reserves (\$):</strong> $settlementOffer->client_reserves</td>
                            <td><strong>Service Fee (\$):</strong> $settlementOffer->service_fees</td>
                            </tr>
                            <tr>
                            <td height='55'><strong>Difference (\$):</strong> $settlementOffer->difference_amount</td>
                            <td>&nbsp;</td>
                            </tr>";
                $content = "</table>";
             
		return array($table_header,$content,$table_footer);
	}
	
	

	public function actionGeneratePdf($id) {
		Yii::import('application.extensions.*');
		require_once ('tcpdf/tcpdf.php');
		require_once ('tcpdf/config/lang/eng.php');

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		// set document information
		//$pdf -> SetCreator(PDF_CREATOR);
		$pdf -> SetAuthor('Global Debt Management');
		$pdf -> SetTitle('Settlement Offer');
		$pdf -> SetSubject('');
		$pdf -> SetKeywords('');
		$pdf -> SetHeaderData('', '', 'Settlement Offer', '');

		$pdf -> setHeaderFont(Array('helvetica', '', 8));
		$pdf -> setFooterFont(Array('helvetica', '', 6));
		$pdf -> SetMargins(15, 18, 15);
		$pdf -> SetHeaderMargin(5);
		$pdf -> SetFooterMargin(10);
		$pdf -> SetAutoPageBreak(TRUE, 0);
		$pdf -> SetFont('dejavusans', '', 7);
		$pdf -> AddPage();

		$model = $this -> loadModel($id);
		$debtor = NULL;
		$creditor = NULL;
		$financialInfo= NULL;
		if ($model != NULL) {
			$debtor = $this -> loadDebtor($model -> Fk_debtor_id);
			$creditor = $this->loadCreditor($model -> Fk_debtor_id);
			$financialInfo= $this->loadDebtorFinancialInfo($model -> Fk_debtor_id);
		}

	
		$table= $this->generateHtmlTemplate( $debtor, $creditor, $financialInfo, $model);
		$tbl = <<<EOF
              <div>
                <table border="0" >
                    <thead>
                    	<tr>
                            <td height='43' colspan='2' align='center' bgcolor='#999999' ><h3><strong>Settlement Offers</strong></h3></td>
                        </tr>                            
                    </thead>
                    <tbody>
							<tr>
	                            <td height='55'><strong>Client Name:</strong> $debtor->firstname $debtor->lastname</td>
                            </tr>
                     		<tr>
                     		    <td><strong>Client ID:</strong> $debtor->file_number</td>
                     		</tr>
                     		<tr>
                     		<td height='55'><strong>Creditor Name:</strong> $creditor->name</td>
                     		</tr>
                     		<tr>
                            	<td><strong>Account Number:</strong> $financialInfo->account_number</td>
                     		</tr>
                     		<tr>
                     		 	<td height='55'><strong>Offer Date:</strong> $model->offer_date</td>
                     		</tr>
                     		<tr>
                            	<td><strong>Valid Until:</strong> $model->valid_date</td>
                            </tr>
                            <tr>
	                            <td height='55'><strong>Status:</strong> $model->offer_status</td>
                            </tr>
                            <tr>
	                            <td><strong>Settlement Amount (\$):</strong> $model->offer_amount</td>					
                            </tr>
                            <tr>
	                            <td><strong>Settlement Offer (%):</strong> $model->offer_amount_percentage</td>
                            </tr>
                            <tr>
 								<td height='55'><strong>Client Savings (\$):</strong> $model->client_saving_amonut</td>                          
                            </tr>
                            <tr>
    	                        <td><strong>Client Savings (%):</strong> $model->client_savings_percentage</td>
                            </tr>
                            <tr>
                             	<td height='55'><strong>Client Reserves (\$):</strong> $settlementOffer->client_reserves</td>                           
                            </tr>
                            <tr>
                                <td><strong>Service Fee (\$):</strong> $settlementOffer->service_fees</td>
                            </tr>
							
                    </tbody>
                </table>
              </div>
         </div>
EOF;
		$pdf -> writeHTML($tbl, true, false, true, false, '');

		$pdf -> LastPage();
		$pdf -> Output("example_002.pdf", "I");
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> render('view', array('model' => $this -> loadModel($id), ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new SettlementOffer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['SettlementOffer'])) {
			$model -> attributes = $_POST['SettlementOffer'];
			$debtor = Debtor::model() -> findByPk($model -> Fk_debtor_id);
			if ($debtor) {
				$this -> debtor_name = $debtor -> firstname . " " . $debtor -> lastname;
				$model -> file_number = $debtor -> file_number;
			}

			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('create', array('model' => $model, ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this -> loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['SettlementOffer'])) {
			$model -> attributes = $_POST['SettlementOffer'];
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('update', array('model' => $model, ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		if (Yii::app() -> request -> isPostRequest) {
			// we only allow deletion via POST request
			$this -> loadModel($id) -> delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax']))
				$this -> redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		} else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('SettlementOffer');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new SettlementOffer('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['SettlementOffer']))
			$model -> attributes = $_GET['SettlementOffer'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = SettlementOffer::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'settlement-offer-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
