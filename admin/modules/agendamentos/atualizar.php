<?php
$table = "agendamentos";
$pasta  = "agendamentos";


$name = $_POST['name'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$barber = $_POST['barber'];
$created_at = date('Y-m-d:H:i:s');
$id = $_POST['id'];

//$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
//$imagem1 = uniqid('', true) . '.' . $extensao;
$stmt = $conn->prepare("UPDATE $table SET name = ?, phone = ?, service = ?, barber = ?, date = ?, time = ?, created_at = ? WHERE id = ?");
if ($stmt === false) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("ssssssss", $name, $phone, $service, $barber, $date, $time, $created_at, $id);

if ($stmt->execute()) {
    alert('Agendamento atualizado com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
} else {
    alert('Erro ao atualizar o agendamento', 'panel.php?m=' . $pasta . '&a=novo.php');
}

$stmt->close();

//move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);
?>





