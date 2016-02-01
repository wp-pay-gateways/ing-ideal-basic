<?php

/**
 * Title: ING - iDEAL Basic - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealBasic_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_ING_IDealBasic_TestConfig();

		$expected = 'https://idealtest.secure-ing.com/ideal/mpiPayInitIng.do';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
