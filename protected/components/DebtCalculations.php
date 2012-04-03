<?php
class DebtCalculations {

	public static $SETTLEMENT_OFFER_PERCENTAGE= 0.45;
	public static $MAINTENANCE_FEE_PERCENTAGE= 0.13;
	public static $ADMINISTRATION_FEE_PERCENTAGE= 0.16;
		
	// Calc Admin Fee
	public static function calcTotalAdminFee($total_debt) {
		return $total_debt * $adminFeePerc = 0.158; // AdminFeePerc: 15.8%
	}

	//
	public static function calcTotalMaintenanceFee($adminFee) {
		return $adminFee * 0.13; //MaintenanceFeePerc: 13.%
	}

	//
	public static function calcTotalSSFFee($total_debt) {
		return $total_debt * 0.45; // SSFfee
	}

	//
	public static function calcMonthlyCost($amount, $month) {
		return $amount / $month;
	}

}
?>