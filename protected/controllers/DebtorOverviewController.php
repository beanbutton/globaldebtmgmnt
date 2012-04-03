<?php
class DebtorOverviewController extends Controller {

	public $id;
	
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
	
	public function loadDebtorCreditorModel($id) {
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
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> render('view', 
		array(
			'debtorModel' => $this -> loadDebtorModel($id), 
			'debtorCreditorModel' => $this->loadDebtorCreditorModel($id),
			'debtorFinancialInfoModel' => $this -> loadDebtorFinancialInfoModel($id), 
			'debtorBudgetInfoModel' => $this -> loadDebtorBudgetInfoModel($id), 
			'debtorProgramInfoModel' => $this-> loadDebtorProgramInfoModel($id),
			'debtorProgressModel' => $this-> loadDebtorProgressModel($id),
			//'debtorSettlementOfferModel' => $this-> loadSettlementOfferModel($id),
			//'debtorSettlementOfferSummaryModel' => $this-> loadSettlementOfferSummaryModel($id),
			
		));
	}

}
?>