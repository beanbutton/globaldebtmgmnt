<?php
require_once ('../extensions/tcpdf/config/lang/eng.php');
require_once ('../extensions/tcpdf/tcpdf.php');
class SettlementOfferPDF extends TCPDF {

	private $settlementHeader = "Settlement Offer";
	private $creditorHeader = "Creditor Info";

	public function __construct() {
		parent::__construct(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	}

	public function Header() {

	}

	public function Footer() {

	}

	public function SetSettlementOffer($SettlemtOffer) {

	}

	public function SetCreditor($Creditor) {

	}

}
?>