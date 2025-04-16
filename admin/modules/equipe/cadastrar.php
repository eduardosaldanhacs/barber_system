<?php
$table = "team";
$pasta  = "equipe";
$path = "../images/equipe/";


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$cpf = $_POST['cpf'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$status = $_POST['status'];
$data = date('Y-m-d');

// Gerar nome seguro para a imagem
$extensao = pathinfo($image, PATHINFO_EXTENSION);
$image = uniqid('', true) . '.' . $extensao;


$stmt = $conn->prepare("INSERT INTO $table (name, lastname, cpf, age, phone, email, description, image, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Vincular os valores (s = string)
$stmt->bind_param("ssssssssss",  $name, $lastname, $cpf, $age, $phone, $email, $description, $image, $status, $created_at, $data);

// Movendo o arquivo só após preparar a query
if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path . $image)) {
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
