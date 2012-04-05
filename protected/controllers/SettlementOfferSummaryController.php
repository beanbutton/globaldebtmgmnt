<?php

class SettlementOfferSummaryController extends Controller {
	public $total_debt_min_payments = array(36000, 24000, 25000, 5600, 23000, 7800);

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';
	public $settlementOffer="hi";

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl',  // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array(
		//array('allow',  // allow all users to perform 'index' and 'view' actions
		//	'actions'=>array('index','view'),
		//	'users'=>array('*'),
		//),
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions'=>array('index','view'),
			'users'=>array('@'),
		),
		array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'index', 'view', 'list', 'create', 'update', 'delete'), 'users' => array('admin'), ), array('deny', // deny all users
		'users' => array('*'), ), );
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
		$model = new SettlementOfferSummary;
		
		if (isset($_GET['id'])) {
			$model -> Fk_debtor_id = $_GET['id'];
			
			$debtor = Debtor::model() -> findByPk($model -> Fk_debtor_id);
			if ($debtor) {
				$settlementOffer = SettlementOffer::model() -> findByAttributes(array("Fk_debtor_id" => $model -> Fk_debtor_id));
		
			}
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['SettlementOfferSummary'])) {
			$model -> attributes = $_POST['SettlementOfferSummary'];
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

		if (isset($_POST['SettlementOfferSummary'])) {
			$model -> attributes = $_POST['SettlementOfferSummary'];
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
		$dataProvider = new CActiveDataProvider('SettlementOfferSummary');
		$settlement_offer_summary_view = array('tableID' => 'settlement_offer_summary', 'data' => array('headings' => array('Total Payments', 'Interest Payments'), 'data' => array('Make Min. Payments' => array(36000, 24000, 25000, 5600, 23000, 7800), 'Credit Counselling' => array(20000, 6000, 3000, 1400, 5600, 7800), 'Our Program' => array(1200, 4000, 1500, 9900, 499))), 'options' => array('title' => 'Settlement Offer Summary', 'width' => 600, 'height' => 300, 'type' => 'bar'));

		$total_debt_summary_view = array('tableID' => 'total_debt_summary', 'data' => array('headings' => array('Make Min. Payments 25 yrs', 'Credit Counselling 4yrs', 'Our Program 36 months'), 'data' => array('Min. Payments' => array(36000, 24000, 25000, 5600, 23000, 7800), 'CrediCounselling' => array(20000, 6000, 3000, 1400, 5600, 7800), 'Our Program' => array(1200, 4000, 1500, 9900, 499))), 'options' => array('title' => 'Settlement Offer Summary', 'width' => 600, 'height' => 300, 'type' => 'bar'));


		if (isset($_GET['id'])) {
			$model -> Fk_debtor_id = $_GET['id'];
			
			$debtor = Debtor::model() -> findByPk($model -> Fk_debtor_id);
			if ($debtor) {
				$settlementOffer = SettlementOffer::model() -> findByAttributes(array("Fk_debtor_id" => $model -> Fk_debtor_id));
		
			}
		}
		$this -> render('index', array('dataProvider' => $dataProvider, 
		'settlement_offer_summary_view' => $settlement_offer_summary_view, 
		'total_debt_summary_view' => $total_debt_summary_view)
		);
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new SettlementOfferSummary('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['SettlementOfferSummary']))
			$model -> attributes = $_GET['SettlementOfferSummary'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = SettlementOfferSummary::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'settlement-offer-summary-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
