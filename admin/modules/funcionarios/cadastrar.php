<?php
$table = "employees";
$pasta  = "funcionarios";
$diretorio = "../images/funcionarios/";

$image = $_FILES['image']['name'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$cpf = $_POST['cpf'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$created_at = date('Y-m-d');

// Gerar nome seguro para a imagem
$extensao = pathinfo($image, PATHINFO_EXTENSION);
$image = uniqid('', true) . '.' . $extensao;


$stmt = $conn->prepare("INSERT INTO $table (image, name, lastname, cpf, phone, age, state, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Vincular os valores (s = string)
$stmt->bind_param("ssssssss", $image, $name, $lastname, $cpf, $phone, $age, $state, $created_at);

// Movendo o arquivo só após preparar a query
if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $diretorio . $image)) {
        alert('Cadastro realizado com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
    } else {
        alert('Cadastro realizado, mas deu um erro ao mover a imagem!', 'panel.php?m=' . $pasta . '&a=novo.php');
    }
} else {
    alert('Erro ao cadastrar o funcionário.', 'panel.php?m=' . $pasta . '&a=novo.php');
}

$stmt->close();
$conn->close();
?>
