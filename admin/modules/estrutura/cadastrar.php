<?php

$tabela = "estrutura";
$pasta  = "estrutura";



$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];
$principal = $_POST['principal'];
$categoria = $_POST['categoria'];
$data = date('Y-m-d');



if($principal == 'S') {
    $sql = "UPDATE estrutura SET principal = 'N' WHERE categoria = '$categoria'";
    mysqli_query($conn, $sql);
}
   
$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
$imagem1 = uniqid('', true) . '.' . $extensao;
if($principal == 'S') {
    $subpasta = 'estruturas';
} else {
    $subpasta = 'turmas';
}
$diretorio = "../images/estruturas/$categoria/";

$sql = "INSERT INTO estrutura (imagem, status, principal, categoria, data_cadastro) VALUES ('$imagem1', '$status', '$principal', '$categoria', '$data')";
move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);

if (!mysqli_query($conn, $sql)) {
    alert('Erro ao cadastrar a imagem','panel.php?m='.$pasta.'&a=novo.php&turma='.$_SESSION['turma'].'');
} else {
    alert('Imagem cadastrada com sucesso!','panel.php?m='.$pasta.'&a=listar.php&turma='.$_SESSION['turma'].'');
}



?>
