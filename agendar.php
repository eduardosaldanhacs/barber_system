<?php
include('admin/includes/connect.php');
include('admin/includes/functions.php');
include('define.php');
$table = "agendamentos";
$pasta  = "agendamentos";
//diretorio = "../images/servicos/";

//$imagem1 = $_FILES['imagem1']['name'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$created_at = date('Y-m-d:H:i:s');

//$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
//$imagem1 = uniqid('', true) . '.' . $extensao;
$stmt = $conn->prepare("INSERT INTO $table (name, phone, service, date, time, created_at) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("ssssss", $name, $phone, $service, $date, $time, $created_at);

if ($stmt->execute()) {
    // alert('Agendamento cadastrado com sucesso!', SITE);
    echo "<script>alert('Agendamento cadastrado com sucesso!'); window.location.href = '" . SITE . "';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar o agendamento'); window.location.href = '" . SITE . "';</script>";
}

$stmt->close();

//move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);
?>





