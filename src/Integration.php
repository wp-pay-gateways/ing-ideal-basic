<?php

class Pronamic_WP_Pay_Gateways_ING_IDealBasic_Integration {
	public function __construct() {
		$this->id       = 'ing-ideal-basic';
		$this->name     = 'ING - iDEAL Basic';
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealBasic_Gateway';
	}
}
