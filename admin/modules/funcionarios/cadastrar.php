<?php
$table = "employees";
$pasta  = "funcionarios";
$diretorio = "../images/funcionarios/";

$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];
$data = date('Y-m-d');

// Gerar nome seguro para a imagem
$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
$imagem1 = uniqid('', true) . '.' . $extensao;


$stmt = $conn->prepare("INSERT INTO $table (imagem, status, data_cadastro) VALUES (?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Vincular os valores (s = string)
$stmt->bind_param("sss", $imagem1, $status, $data);

// Movendo o arquivo só após preparar a query
if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1)) {
        alert('Imagem cadastrada com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
    } else {
        alert('Erro ao mover a imagem!', 'panel.php?m=' . $pasta . '&a=novo.php');
    }
} else {
    alert('Erro ao cadastrar a imagem.', 'panel.php?m=' . $pasta . '&a=novo.php');
}

$stmt->close();
$conn->close();
?>
