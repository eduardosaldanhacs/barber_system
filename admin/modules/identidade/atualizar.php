<?php

$pasta  = "identidade";

if(isset($_POST['missao'])) {
    $acao = $_POST['missao'];
	$coluna = "missao";
} else if (isset($_POST['visao'])) {
    $acao = $_POST['visao'];
    $coluna = "visao";
} else if (isset($_POST['valores'])) {
    $acao = $_POST['valores'];
    $coluna = "valores";
}

if(isset($coluna, $acao)) {
    $sql = "UPDATE identidade SET $coluna = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $acao);

        if(mysqli_stmt_execute($stmt)) {
            alert('Texto atualizado com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
        } else {
            alert('Erro ao atualizar o texto','panel.php?m='.$pasta.'&a=editar.php');
        }

        mysqli_stmt_close($stmt);
    } else {
        alert('Erro ao preparar a instrução SQL','panel.php?m='.$pasta.'&a=editar.php');
    }
} else {
    alert('Coluna ou ação não definidas','panel.php?m='.$pasta.'&a=editar.php');
}



?>
