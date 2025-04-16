<?php
if (!empty($_GET['id'])) {

    $table = "team";
    $path  = "equipe";
    $diretorio = "../images/equipe/";
    $deleted_at = date('Y-m-d H:i:s');
    $id = $_GET['id'];

    $stmt = $conn->prepare("UPDATE $table SET deleted_at = ? WHERE id = ?");
    if ($stmt === false) {
        die("Erro na preparação: " . $conn->error);
    }

    $stmt->bind_param("si", $deleted_at, $id);

    if ($stmt->execute()) {
        alert('Imagem excluida com sucesso!', 'panel.php?m=' . $path . '&a=listar.php');
    } else {
        alert('Erro ao excluir a imagem', 'panel.php?m=' . $path . '&a=novo.php');
    }
    $stmt->close();
} else {
    header("Location: panel.php?m=$path&a=novo.php");
    exit;
}
