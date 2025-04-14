
<?php

$tabela = "estrutura";
$pasta  = "estrutura";

$id = $_GET['id'];
$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];
$principal = $_POST['principal'];
$categoria = $_POST['categoria'];
$data = date('Y-m-d');

if(empty($_FILES['imagem1']['name'])) {
		if($principal == 'S') {
			$sql = "UPDATE estrutura SET principal = 'N' WHERE categoria = '$categoria'";
			mysqli_query($conn, $sql);
		}
		$sql = "UPDATE estrutura SET status = '$status', principal = '$principal' WHERE id = '$id'";
		if (!mysqli_query($conn, $sql)) {
			alert('Erro ao atualizar a imagem','panel.php?m='.$pasta.'&a=novo.php');
		} else {
			alert('Imagem atualizada com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
		}
} else {

		$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
		$imagem1 = uniqid('', true) . '.' . $extensao;

		$diretorio = "../images/estruturas/$categoria/";

		if($principal == 'S') {
			$sql = "UPDATE estrutura SET principal = 'N' WHERE categoria = '$categoria'";
			mysqli_query($conn, $sql);
		}

		$sql = "UPDATE estrutura SET imagem = '$imagem1', status = '$status', principal = '$principal', categoria = '$categoria' WHERE id = '$id'";
		move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);

		if (!mysqli_query($conn, $sql)) {
			alert('Erro ao atualizar a imagem','panel.php?m='.$pasta.'&a=novo.php&turma'.$_SESSION['turma'].'');
		} else {
			alert('Imagem atualizada com sucesso!','panel.php?m='.$pasta.'&a=listar.php&turma='.$_SESSION['turma'].'');
		}

}




?>
