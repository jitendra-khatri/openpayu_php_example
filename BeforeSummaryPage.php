<?php 

/**
 *	Retrieving access_token after login in payu service, second step in OAuth processing.
 *
 *	@copyright  Copyright (c) 2011-2012, PayU
 *	@license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)		
 */

session_start();

include_once('sdk/openpayu.php');
include_once("config.php");

$myUrl = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] .$_SERVER['PHP_SELF'];			
	
// After customer login PayU service redirect back user to merchant with ?code=... paramater. 
// Parameter code is used to retrieve accessToken in OAuth autorization code mode from PayU service.
$result = OpenPayU_OAuth::accessTokenByCode($_GET['code'], $myUrl);

print_r($result);

if ($result->getSuccess()) {
	echo "<br/>accessTokenByCode success<br/>";
} else {
	echo "accessTokenByCode error: " . $result->getError() . "<br/>";
}

// print some debug data (optional)
echo OpenPayU_Order::printOutputConsole();
?>

<form method="GET" action="<?php echo OpenPayu_Configuration::getSummaryUrl();?>">
	<input type="hidden" name="sessionId" value="<?php echo $_SESSION['sessionId'];?>">
	<input type="hidden" name="oauth_token" value="<?php echo $result->getAccessToken();?>">
	<input type="submit" value="Next step (summary page) >">		
</form>	