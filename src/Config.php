<?php

/**
 * Title: ING - iDEAL Basic config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_ING_IDealBasic_Config extends Pronamic_WP_Pay_Gateways_IDealBasic_Config {
	public function get_payment_server_url() {
		return 'https://ideal.secure-ing.com/ideal/mpiPayInitIng.do';
	}
}
