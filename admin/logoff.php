<?php

	session_name('sistema_vovo_olmira');
	session_start();
	include('includes/connect.php');
	include('includes/functions.php');
	
	$_SESSION = array();
	session_destroy();
	
	redir('index.php');

?>