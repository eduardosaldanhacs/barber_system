<?php
$table = "servicos";
$pasta  = "servicos";
//diretorio = "../images/servicos/";

//$imagem1 = $_FILES['imagem1']['name'];
$name = $_POST['nome'];
$description = $_POST['descricao'];
$price = $_POST['preco'];
$state = $_POST['state'];
$date = date('Y-m-d:H:i:s');

//$extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
//$imagem1 = uniqid('', true) . '.' . $extensao;
$stmt = $conn->prepare("INSERT INTO $table (name, description, price, state, created_at) VALUES (?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("sssss", $name, $description, $price, $state, $date);

if ($stmt->execute()) {
    alert('Imagem cadastrada com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
} else {
    alert('Erro ao cadastrar a imagem', 'panel.php?m=' . $pasta . '&a=novo.php');
}

$stmt->close();

//move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1);
?>





