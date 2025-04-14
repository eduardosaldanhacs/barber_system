<?php

	$erro=false;

	if (empty($_POST['senha_atual'])){
		alert('Informe a senha atual!','panel.php?m=admins&a=novo.php');
	}
	
	$query = "SELECT * FROM admins WHERE id= '{$_POST['id']}'";
	$query = mysqli_query($conn,$query);
	$dados = mysqli_fetch_array($query);
	
	if(!empty($_POST['senha']) || !empty($_POST['repete'])){

		if (md5($_POST['senha_atual'])!=$dados['senha']) {
			alert('A senha digitada não confere com a senha atual!','panel.php?m=admins&a=novo.php&id='.$_POST['id'].'');
			$erro = true;				
		}

		if (empty($_POST['senha'])){
			alert('Informe a senha do administrador!','panel.php?m=admins&a=novo.php&id='.$_POST['id'].'');	
			$erro = true;		
		}
		
		if ($_POST['senha']!=$_POST['repete']){
			alert('A senha e a confirmação não são idênticas!','panel.php?m=admins&a=novo.php&id='.$_POST['id'].'');
			$erro = true;		
		}
		
		if($erro!=true){
			
			$query_insert = "UPDATE admins SET 
			nome='{$_POST['nome']}', 
			login='{$_POST['usuario']}', 
			senha ='".md5($_POST['senha'])."' 
			WHERE id='{$_POST['id']}'";
			
		}
		
	}

	else{
		
		$query_insert = "UPDATE admins SET 
		nome='{$_POST['nome']}', 
		login='{$_POST['usuario']}'
		WHERE id='{$_POST['id']}'";
		
	}

	if($erro!=true)
	{
		
		if(!mysqli_query($conn,$query_insert)){
		
			alert('Erro ao Atualizar!','panel.php?m=admins&a=listar.php');
		
		}
		else{
			
			alert('Sucesso ao Atualizar!','panel.php?m=admins&a=listar.php');
			
		}
	}
	
?>