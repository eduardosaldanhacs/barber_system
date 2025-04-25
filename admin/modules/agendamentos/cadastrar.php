<?php
$table = "agendamentos";
$pasta  = "agendamentos";
//diretorio = "../images/servicos/";

//$imagem1 = $_FILES['imagem1']['name'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$barber = $_POST['barber'];
$created_at = date('Y-m-d:H:i:s');

//$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
//$imagem1 = uniqid('', true) . '.' . $extensao;
$stmt = $conn->prepare("INSERT INTO $table (name, phone, service, barber, date, time, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("sssssss", $name, $phone, $service, $barber, $date, $time, $created_at);

if ($stmt->execute()) {
    alert('Agendamento cadastrado com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
} else {
    alert('Erro ao cadastrar o agendamento', 'panel.php?m=' . $pasta . '&a=novo.php');
}

$stmt->close();

//move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);
?>





