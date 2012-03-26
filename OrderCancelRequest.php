<?php


/**
 *	Order cancel testing, it might be used independly from the main payment process.
 *
 *	@copyright  Copyright (c) 2011-2012, PayU
 *	@license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)		
 */
	
include_once('sdk/openpayu.php');
include_once('config.php');

if(!empty($_POST['sessionId']))
{
	$result = OpenPayU_Order::cancel($_POST['sessionId'], true);
	echo OpenPayU_Order::printOutputConsole();
	exit;
}

?>

<form action="" method="post">
	<label for="session">sessionId:</label> <input type="text" id="session" name="sessionId" value="" />
	<input type="submit" value="Send Request" />
</form>