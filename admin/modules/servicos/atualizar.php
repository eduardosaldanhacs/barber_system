<?php

$pasta  = "aprendizagens";

if(isset($_POST['conviver'])) {
    $acao = $_POST['conviver'];
	$coluna = "conviver";
} else if (isset($_POST['brincar'])) {
    $acao = $_POST['brincar'];
    $coluna = "brincar";
} else if (isset($_POST['participar'])) {
    $acao = $_POST['participar'];
    $coluna = "participar";
} else if (isset($_POST['explorar'])) {
    $acao = $_POST['explorar'];
    $coluna = "explorar";
} else if (isset($_POST['expressar'])) {
    $acao = $_POST['expressar'];
    $coluna = "expressar";
} else if (isset($_POST['conhecer'])) {
    $acao = $_POST['conhecer'];
    $coluna = "conhecer";
}



if(isset($coluna, $acao)) {
    $sql = "UPDATE aprendizagens SET $coluna = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $acao);

        if(mysqli_stmt_execute($stmt)) {
            alert('Texto atualizado com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
        } else {
            alert('Erro ao atualizar a texto','panel.php?m='.$pasta.'&a=editar.php');
        }

        mysqli_stmt_close($stmt);
    } else {
        alert('Erro ao preparar a instrução SQL','panel.php?m='.$pasta.'&a=editar.php');
    }
} else {
    alert('Coluna ou ação não definidas','panel.php?m='.$pasta.'&a=editar.php');
}



?>
