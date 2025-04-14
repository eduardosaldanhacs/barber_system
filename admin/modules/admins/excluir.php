<?php

	$query="DELETE FROM admins WHERE id='{$_GET['id']}'";
	if (!mysqli_query($conn,$query))
	{
		alert('Erro ao excluir!','panel.php?m=admins&a=listar.php');
	}
	else
	{
		alert('Sucesso ao excluir!','panel.php?m=admins&a=listar.php');
	}

?>