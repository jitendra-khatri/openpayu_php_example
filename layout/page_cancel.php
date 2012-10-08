<?php
/*
 * 	Copyright (c) 2011-2012 PayU
    http://www.payu.com
*/
$dir = explode(basename(dirname(__FILE__)).'/', $_SERVER['SCRIPT_NAME']);
$directory = $dir[0].basename(dirname(__FILE__));

$url = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] .$dir[0];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Order create unsuccessful</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Order create unsuccessful</h1>
    </div>
    <legend>COME BACK LATER :)</legend>

    <a class="btn" href="<?php echo $url; ?>OrderCreateRequest.php">Start example process again</a>
</div>
</body>
</html>