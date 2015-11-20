<?php

/**
 * Title: ING - iDEAL Basic integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealBasic_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id       = 'ing-ideal-basic';
		$this->name     = 'ING - iDEAL Basic';
		$this->provider = 'ing';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_ING_IDealBasic_ConfigFactory';
	}
}
