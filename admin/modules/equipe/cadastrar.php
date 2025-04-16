<?php
$table = "team";
$folder  = "equipe";
$path = "../images/equipe/";


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$cpf = $_POST['cpf'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$state = $_POST['state'];
$created_at = date('Y-m-d:H:i:s');

// Gerar nome seguro para a imagem
$extensao = pathinfo($image, PATHINFO_EXTENSION);
$image = uniqid('', true) . '.' . $extensao;


$stmt = $conn->prepare("INSERT INTO $table (name, lastname, cpf, age, phone, email, description, image, state, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Vincular os valores (s = string)
$stmt->bind_param("ssssssssss",  $name, $lastname, $cpf, $age, $phone, $email, $description, $image, $state, $created_at);

// Movendo o arquivo só após preparar a query
if ($stmt->execute()) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path . $image)) {
        alert('Funcionário cadastrado com sucesso!', 'panel.php?m=' . $folder . '&a=listar.php');
    } else {
        alert('Funcionário cadastrado, mas deu um erro ao mover a imagem!', 'panel.php?m=' . $folder . '&a=novo.php');
    }
} else {
    alert('Erro ao cadastrar o funcionário.', 'panel.php?m=' . $folder . '&a=novo.php');
}

$stmt->close();
$conn->close();
?>
