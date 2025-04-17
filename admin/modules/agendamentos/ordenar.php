<?php

	session_name('barber_system');
	session_start();

	include('../../includes/functions.php');

	if(empty($_SESSION['NOME']) || empty($_SESSION['ID_ADMIN']) || empty($_SESSION['ADMINISTRADOR']) || $_SESSION['IS_LOGADO'] != true){
		redir('index.php');
	}

	include('../../includes/connect.php');

	$pasta  = "banners";
	$tabela = "banners";

	$cardapios = $_POST['cardapios'];
	$pos       = 0;
	
	foreach($cardapios as $cardapio){
		$ordena = "UPDATE $tabela set ordem = '$pos' where id = '$cardapio'";
		mysqli_query($conn,$ordena);
		$pos++;
	}

?>