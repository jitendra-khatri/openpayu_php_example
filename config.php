<?php

/**
 *	one place for configuration.
 *
 *	@copyright  Copyright (c) 2011-2012, PayU
 *	@license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)		
 */

include_once("sdk/openpayu.php");

// Used settings belongs to sandbox test merchant account, ready to start.
// But its better to create own sandbox account and use it for testing.

OpenPayU_Configuration::setEnvironment('sandbox');
OpenPayU_Configuration::setMerchantPosId('37857');
OpenPayU_Configuration::setPosAuthKey('ArJmhmF');
OpenPayU_Configuration::setClientId('37857');
OpenPayU_Configuration::setClientSecret('64dec4280702424aeea05ae85d20e15e');
OpenPayU_Configuration::setSignatureKey('a8e58d7c77722ceb73fa3fe43bf9cd53');