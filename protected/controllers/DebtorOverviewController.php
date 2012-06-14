<?php
class DebtorOverviewController extends Controller {

	public $id;
	
	
	public function getMonths()
	{
		return GlobalDebtManagementUtils::getMonths();
	}
	
	
	public function getStatus()
	{
		return GlobalDebtManagementUtils::getStatus();
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadDebtorModel($id) {
		$model = Debtor::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}
	
	public function loadCreditorModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = Creditor::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadDebtorFinancialInfoModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = DebtorFinancialInfo::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadDebtorBudgetInfoModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = DebtorBudgetInfo::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadDebtorProgramInfoModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = DebtorProgramInfo::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadDebtorProgressModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = DebtorProgress::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}
	
	public function loadSettlementOfferModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = SettlementOffer::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		//if ($model === null)
		//	throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}
	
	public function loadSettlementOfferSummaryModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = SettlementOfferSummary::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		//if ($model === null)
		//	throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	public function loadAmortizationModel($id) {
		$debtor = Debtor::model() -> findByPk($id);		
		$model = Amortization::model() -> findByAttributes(array("Fk_debtor_id" => $id));
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}



	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionCreate() {
		
		$debtorModel= new Debtor();
		$creditorModel= new Creditor();
		$debtorFinancialInfoModel= new DebtorFinancialInfo();
		$debtorBudgetInfoModel= new DebtorBudgetInfo();
		$debtorProgramInfoModel= new DebtorProgramInfo();
		$debtorProgressModel= new DebtorProgress();
		$amortizationModel= new Amortization();
		$settlementOfferModel= new SettlementOffer();
		
		$this -> render('create', 
		array(
			'debtorModel' => $debtorModel, 
			'creditorModel' => $creditorModel,
			'debtorFinancialInfoModel' => $debtorFinancialInfoModel, 
			'debtorBudgetInfoModel' => $debtorBudgetInfoModel, 
			'debtorProgramInfoModel' => $debtorProgramInfoModel,
			'debtorProgressModel' => $debtorProgressModel,
			'amortizationModel' => $amortizationModel,
			'settlemenOfferModel' => $settlementOfferModel,
			
		));
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> render('view', 
		array(
			'debtorModel' => $this -> loadDebtorModel($id), 
			'creditorModel' => $this->loadCreditorModel($id),
			'debtorFinancialInfoModel' => $this -> loadDebtorFinancialInfoModel($id), 
			'debtorBudgetInfoModel' => $this -> loadDebtorBudgetInfoModel($id), 
			'debtorProgramInfoModel' => $this-> loadDebtorProgramInfoModel($id),
			'debtorProgressModel' => $this-> loadDebtorProgressModel($id),
			'amortizationModel' => $this->loadAmortizationModel($id),
			'settlemenOfferModel' => $this-> loadSettlementOfferModel($id),			
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$debtorModel=new Debtor('search');
		$creditorModel= new Creditor('search');
		$debtorFinancialInfoModel= new DebtorFinancialInfo('search');
		$debtorBudgetInfoModel= new DebtorBudgetInfo('search');
		$debtorProgramInfoModel= new DebtorProgramInfo('search');
		$debtorProgressModel= new DebtorProgress('search');
		$amortizationModel= new Amortization('search');
		$settlementOfferModel= new SettlementOffer('search');
		
		
		$debtorModel->unsetAttributes();  // clear any default values
		if(isset($_GET['Debtor']))
			$debtorModel->attributes=$_GET['Debtor'];

		$this->render('admin',array(
			'debtorModel'=> $debtorModel,
			'creditorModel' => $creditorModel,
			'debtorFinancialInfoModel' => $debtorFinancialInfoModel, 
			'debtorBudgetInfoModel' => $debtorBudgetInfoModel, 
			'debtorProgramInfoModel' => $debtorProgramInfoModel,
			'debtorProgressModel' => $debtorProgressModel,
			'amortizationModel' => $amortizationModel,
			'settlemenOfferModel' => $settlementOfferModel,
		));
	}

}
?>