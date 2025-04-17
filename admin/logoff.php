<?php

	session_name('barber_system');
	session_start();
	include('includes/connect.php');
	include('includes/functions.php');
	
	$_SESSION = array();
	session_destroy();
	
	redir('index.php');

?>