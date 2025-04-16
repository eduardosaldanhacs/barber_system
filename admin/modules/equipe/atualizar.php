<?php
$tabela = "banners";
$pasta  = "banners";
$diretorio = "../images/banners/";

$id = $_GET['id'];
$imagem1 = $_FILES['imagem1']['name'];
$status = $_POST['status'];

if (empty($imagem1)) {

    // Se não foi enviada nova imagem, só atualiza o status
    $stmt = $conn->prepare("UPDATE banners SET status = ? WHERE id = ?");
    if ($stmt === false) {
        die("Erro na preparação: " . $conn->error);
    }

    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        alert('Imagem atualizada com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
    } else {
        alert('Erro ao atualizar a imagem', 'panel.php?m=' . $pasta . '&a=novo.php');
    }

    $stmt->close();

} else {

    $data = date('Y-m-d');

    $extensao = pathinfo($imagem1, PATHINFO_EXTENSION);
    $imagem1 = uniqid('', true) . '.' . $extensao;

    if (!move_uploaded_file($_FILES['imagem1']['tmp_name'], $diretorio . $imagem1)) {
        alert('Erro ao mover a imagem!', 'panel.php?m=' . $pasta . '&a=novo.php');
        exit;
    }

    $stmt = $conn->prepare("UPDATE banners SET imagem = ?, status = ?, data_cadastro = ? WHERE id = ?");
    if ($stmt === false) {
        die("Erro na preparação: " . $conn->error);
    }

    $stmt->bind_param("sssi", $imagem1, $status, $data, $id);

    if ($stmt->execute()) {
        alert('Imagem atualizada com sucesso!', 'panel.php?m=' . $pasta . '&a=listar.php');
    } else {
        alert('Erro ao atualizar a imagem', 'panel.php?m=' . $pasta . '&a=novo.php');
    }

    $stmt->close();
}

$conn->close();
?>
