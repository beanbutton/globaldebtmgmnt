<?php

class DebtorProgramInfoController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';
	public $debtor_name;
	

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
		return array( array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view'), 'users' => array('*'), ), array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('create', 'update','index', 'view', 'delete'), 'users' => array('@'), ), array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'delete'), 'users' => array('admin'), ), array('deny', // deny all users
		'users' => array('*'), ), );
	}

	public function getMonths()
	{
		return array('1' => '1 months', '2' => '2 months', '3' => '3 months', '4' => '4 months',
			  '5' => '5 months', '6' => '6 months', '7' => '7 months', '8' => '8 months',
			  '9' => '9 months', '10' => '10 months', '11' => '11 months', '12' => '12 months',
			  '13' => '13 months', '14' => '14 months', '15' => '15 months', '16' => '16 months',
			  '17' => '17 months', '18' => '18 months', '19' => '19 months', '20' => '20 months',
			  '21' => '21 months', '22' => '22 months', '23' => '23 months', '24' => '24 months',
			  '25' => '25 months', '26' => '26 months', '27' => '27 months', '28' => '28 months',
			  '29' => '29 months', '30' => '30 months', '31' => '31 months', '32' => '32 months',
			  '33' => '33 months', '34' => '34 months', '34' => '34 months', '35' => '35 months',
			  '37' => '37 months', '38' => '38 months', '39' => '39 months', '40' => '40 months',
			  '41' => '41 months', '42' => '42 months', '43' => '43 months', '44' => '44 months',
			  '45' => '45 months', '46' => '46 months', '47' => '47 months', '48' => '48 months',
			  );
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
		$model = new DebtorProgramInfo;
		
		if (isset($_GET['id'])) {
			$model -> Fk_debtor_id = $_GET['id'];
			$debtor = Debtor::model() -> findByPk($model -> Fk_debtor_id);

			if ($debtor) {
				$this -> debtor_name = $debtor -> firstname . " " . $debtor -> lastname;	
			}
		}
		
		//AUTOMATIC
		$model->maintenance_fee_automatic= DebtCalculations::$MAINTENANCE_FEE_PERCENTAGE;
		$model->admin_fee_percentage_automatic= DebtCalculations::$ADMINISTRATION_FEE_PERCENTAGE;
		$model->service_fee_automatic= DebtCalculations::$SETTLEMENT_OFFER_PERCENTAGE;
		
		
		//

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['DebtorProgramInfo'])) {
			$model -> attributes = $_POST['DebtorProgramInfo'];
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

		if (isset($_POST['DebtorProgramInfo'])) {
			$model -> attributes = $_POST['DebtorProgramInfo'];
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
		$dataProvider = new CActiveDataProvider('DebtorProgramInfo');
		$this -> render('index', array('dataProvider' => $dataProvider, ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new DebtorProgramInfo('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['DebtorProgramInfo']))
			$model -> attributes = $_GET['DebtorProgramInfo'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = DebtorProgramInfo::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'debtor-program-info-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}

}
