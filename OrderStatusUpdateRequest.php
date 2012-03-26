<?php

/**
 *	Order status testing, it might be used independly from the main payment process.
 *
 *	@copyright  Copyright (c) 2011-2012, PayU
 *	@license    http://opensource.org/licenses/GPL-3.0  Open Software License (GPL 3.0)		
 */

include_once('sdk/openpayu.php');
include_once('config.php');

if(!empty($_POST['sessionId']))
{
	$result = OpenPayU_Order::updateStatus($_POST['sessionId'], $_POST['status'], true);
	echo OpenPayU_Order::printOutputConsole();
	exit;
}

?>
<form action="" method="post">
	<p><label for="session">sessionId:</label> <input type="text" id="session" name="sessionId" value="" /></p>
	<p>
		<label for="stat">Status:</label> 
		<select name="status" id="stat">
			<option value="ORDER_STATUS_NEW">ORDER_STATUS_NEW</option>
			<option value="ORDER_STATUS_PENDING">ORDER_STATUS_PENDING</option>
			<option value="ORDER_STATUS_CANCEL">ORDER_STATUS_CANCEL</option>
			<option value="ORDER_STATUS_REJECT">ORDER_STATUS_REJECT</option>
			<option value="ORDER_STATUS_COMPLETE">ORDER_STATUS_COMPLETE</option>
			<option value="ORDER_STATUS_SENT">ORDER_STATUS_SENT</option>
		</select>
	</p>
	<input type="submit" value="Send Request" />
</form>