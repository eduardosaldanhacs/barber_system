<?php
 header("X-Frame-Options: sameorigin");
 date_default_timezone_set('America/Sao_Paulo');

 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Request-Method: GET, POST");
 header('Access-Control-Allow-Headers: Content-MD5, X-Alt-Referer');
 header('Access-Control-Allow-Credentials: true');

 header("X-Frame-Options: sameorigin");

 header("Content-Type: text/html; charset=utf-8", true);
 header("Expires: Wed, 21 Dec 1983 09:00:00 GMT");
 header("Last-Modified: " . gmdate("D, d M Y H:i:s ") . " GMT");
 header("Cache-Control: no-store, no-cache, must-revalidate");
 header("Cache-Control: no-store, no-cache, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
?>

<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo SITE ?>images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo SITE ?>images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo SITE ?>images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo SITE ?>images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo SITE ?>images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo SITE ?>images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo SITE ?>images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo SITE ?>images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE ?>images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo SITE ?>images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE ?>images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo SITE ?>images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE ?>images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo SITE ?>images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo SITE ?>images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">