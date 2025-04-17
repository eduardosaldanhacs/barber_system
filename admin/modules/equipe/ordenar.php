<?php

	session_name('barber_system');
	session_start();

	include('../../includes/functions.php');

	if(empty($_SESSION['NOME']) || empty($_SESSION['ID_ADMIN']) || empty($_SESSION['ADMINISTRADOR']) || $_SESSION['IS_LOGADO'] != true){
		redir('index.php');
	}

	include('../../includes/connect.php');

	$pasta  = "team";
	$tabela = "team";

	$equipe = $_POST['id'];
	$pos       = 0;
	
	foreach($equipe as $funcionario){
		echo $ordena = "UPDATE $tabela set ordem = '$pos' where id = '$funcionario'";
		mysqli_query($conn,$ordena);
		$pos++;
	}

?>