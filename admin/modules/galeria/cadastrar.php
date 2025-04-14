<?php



$tabela = "galeria";

$pasta  = "galeria";
$diretorio = "../images/galerias/";

$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];
$data = date('Y-m-d');

$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
$imagem1 = uniqid('', true) . '.' . $extensao;

$sql = "INSERT INTO galeria (imagem, status, data_cadastro) VALUES ('$imagem1', '$status', '$data')";


// Move os arquivos carregados para o diretório especificado
move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);


if (!mysqli_query($conn, $sql)) {
    alert('Erro ao cadastrar a imagem','panel.php?m='.$pasta.'&a=novo.php');
} else {
    alert('Imagem cadastrada com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
}

echo SITE;
// Fechamento da declaração e da conexão
$stmt->close();
$conn->close();
?>


