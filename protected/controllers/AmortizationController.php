<?php

class AmortizationController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl',          // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array( array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view'), 'users' => array('*'), ), array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('create', 'update'), 'users' => array('@'), ), array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'index', 'view', 'list', 'create', 'update', 'updatePopup','delete'), 'users' => array('admin'), ), array('deny', // deny all users
		'users' => array('*'), ), );
	}

	public function getColumnHeaders() {
		return array('id', 'Payment Date', 'Total Monthly Cost', 'Administration Fee', 'Maintenance Fee', 'Settlement Saving Fund');
	}

	public function getMonths() {
		return GlobalDebtManagementUtils::getMonths();
	}

	public function getAmortizationPlan($id) {
		$model = $this -> loadModel($id);
		$debtor = $this -> loadDebtor($model -> Fk_debtor_id);

		$payment_start_date = $model -> payment_start_date;
		$payment_period = $model -> payment_period;

		$start_date = date("Y-m-d", strtotime($payment_start_date));
		$end_date = date("Y-m-d", strtotime($start_date . "+" . $payment_period . "month"));
		$period = $this -> getDateRange($start_date, $end_date);

		$monthly_cost = $model -> total_monthly_cost;
		$admin_fee = $model -> adminstration_fee;
		$maintenance_fee = $model -> maintenance_fee;
		$savings_fee = $model -> settlement_savings_fund;

		$counter = 1;
		$data = array();
		foreach ($period as $date) {
			$data[] = array($counter++, $date, $monthly_cost, $admin_fee, $maintenance_fee, $savings_fee);
		}
		return $data;
	}

	public function getDateRange($startDateStr, $endDateStr) {
		$startDate = new DateTime($startDateStr);
		$endDate = new DateTime($endDateStr);

		$interval = DateInterval::createFromDateString('last thursday of next month');
		$period = new DatePeriod($startDate, $interval, $endDate, DatePeriod::EXCLUDE_START_DATE);
		$dataRange = array();
		foreach ($period as $dt) {
			$dataRange[] = $dt -> format("Y-m-d");
		}
		return $dataRange;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$model = $this -> loadModel($id);
		$columnsArray = $this -> getColumnHeaders();

		$this -> render('view', array('model' => $model, 'columnsArray' => $columnsArray, ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Amortization;
		if (isset($_GET['id'])) {
			$model -> Fk_debtor_id = $_GET['id'];
			$debtor = $this -> loadDebtor($model -> Fk_debtor_id);

			if ($debtor) {
				$this -> debtor_name = $debtor -> firstname . " " . $debtor -> lastname;
			}

			$debtorProgress = DebtorProgress::model() -> findByAttributes(array("Fk_debtor_id" => $model -> Fk_debtor_id));
			if ($debtorProgress) {

				//TotalMonthlyCost
				$model -> total_monthly_cost = $model -> adminstration_fee + $model -> maintenance_fee + $model -> settlement_savings_fund / 24;

				//TotalAdministrationFee
				$model -> total_adminstration_fee = $debtorProgress -> total_debt * DebtCalculations::$ADMINISTRATION_FEE_PERCENTAGE;

				//TotalMaintenanceFee
				$model -> total_maintenance_fee = $model -> total_adminstration_fee * DebtCalculations::$MAINTENANCE_FEE_PERCENTAGE;

				// TotalSettlementSavingsFund
				$model -> total_settlement_savings_fund = $debtorProgress -> total_debt * DebtCalculations::$SETTLEMENT_OFFER_PERCENTAGE;

				//TotalMonthlyCost
				$model -> total_monthly_cost_total = $model -> total_adminstration_fee + $model -> total_maintenance_fee + $model -> total_settlement_savings_fund;

				//Monthly costs
				//TotalAdministrationFee
				$model -> adminstration_fee = $model -> total_adminstration_fee / 24;

				//TotalMaintenanceFee
				$model -> maintenance_fee = $model -> total_maintenance_fee / 24;

				// TotalSettlementSavingsFund
				$model -> settlement_savings_fund = $model -> total_settlement_savings_fund / 24;

				// TotalMonthlyCost
				$model -> total_monthly_cost = $model -> total_monthly_cost_total / 24;
			}
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Amortization'])) {
			$model -> attributes = $_POST['Amortization'];
			$start_date = date("Y-m-d", strtotime($model -> payment_start_date));
			$end_date = date("Y-m-d", strtotime($start_date . "+" . $model -> payment_period . "month"));
			$model -> payment_end_date = $end_date;
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('create', array('model' => $model));
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

		if (isset($_POST['Amortization'])) {
			$model -> attributes = $_POST['Amortization'];
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('update', array('model' => $model));
	}

	public function actionUpdatePopup($id)
	{
		$model= $this->loadModel($id);
		if (isset($_POST['Amortization'])) {
			$model -> attributes = $_POST['Amortization'];
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('update_popup', array('model' => $model));
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
		$dataProvider = new CActiveDataProvider('Amortization');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Amortization('search');
		$model -> unsetAttributes();
		
		$dataProvider = new CActiveDataProvider('Amortization');

		// clear any default values
		if (isset($_GET['Amortization']))
			$model -> attributes = $_GET['Amortization'];

		$this -> render('admin', array('model' => $model, 'arProvider' => $dataProvider));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = Amortization::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadDebtor($id) {
		$debtor = Debtor::model() -> findByPk($id);
		if ($debtor === null) {
			throw new CHttpException(404, 'Debtor not found!');
		}
		return $debtor;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'amortization-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

	public function getHeaders() {
		return array('id', 'Payment Date', 'Total Monthly Cost', 'Administration Fee', 'Maintenance Fee', 'Settlement Saving Fund');
	}

}
