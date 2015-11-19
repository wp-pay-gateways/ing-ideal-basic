<?php

class Pronamic_WP_Pay_Gateways_ING_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ing-ideal-basic';
		$this->name     = 'ING - iDEAL Basic';
		$this->provider = 'ing';
	}
}
