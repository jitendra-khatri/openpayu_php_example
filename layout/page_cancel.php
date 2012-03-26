<?php
	/*
	 * 	Copyright (c) 2011-2012 PayU
		http://www.payu.com
	 	
	 	2012-01-13
		- added checking server protocol and script directory
	*/

	echo "COME BACK LATER :)<br/><br/><br/>";
	
	$dir = explode(basename(dirname(__FILE__)).'/', $_SERVER['SCRIPT_NAME']);
	$directory = $dir[0].basename(dirname(__FILE__));

	echo '<a href="'.((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] .$dir[0].'OrderCreateRequest.php">start again</a>';

?>