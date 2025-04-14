<?php


$tabela = "galeria";
$pasta  = "galeria";
$diretorio = "../images/galerias/";


$id = $_GET['id'];
$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];
$data = date('Y-m-d');

if(empty($_FILES['imagem1']['name'])) {
	$sql = "UPDATE galeria SET status = '$status' WHERE id = '$id'";
	if (!mysqli_query($conn, $sql)) {
		alert('Erro ao atualizar o status','panel.php?m='.$pasta.'&a=novo.php');
	} else {
		alert('Status atualizado com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
	}
} else {

    $extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
    $imagem1 = uniqid('', true) . '.' . $extensao;
    $sql = "UPDATE banners SET imagem = '$imagem1', status = '$status' WHERE id = '$id'";

    mysqli_query($conn, $sql);

    // Move os arquivos carregados para o diretório especificado
    move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);

    $sql = "UPDATE galeria SET status = '$status', imagem = '$imagem1' WHERE id = '$id'";

    if (!mysqli_query($conn, $sql)) {
        alert('Erro ao atualizar a imagem','panel.php?m='.$pasta.'&a=novo.php');
    } else {
        alert('Imagem atualizada com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
    }

// Fechamento da declaração e da conexão
}
?>