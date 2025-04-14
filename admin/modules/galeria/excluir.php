<?php

	$tabela = "galeria";
	$pasta  = "galeria";


	if(!empty($_GET['id'])){
		$id = $_GET['id'];

		$query = "SELECT * FROM $tabela WHERE id = {$_GET['id']}";
		$query = mysqli_query($conn,$query);
		$dados = mysqli_fetch_array($query);
		$action = "panel.php?m=$pasta&a=atualizar.php&id=$id";
		$button = "Atualizar";
	}

	else{
		$action = "panel.php?m=$pasta&a=cadastrar.php";
		$button = "Cadastrar";
		$dados  = "";
	}
?>



<div class="col-12 form-group">

</div>

<form method="post" action="<?=$action?>" enctype="multipart/form-data">

	<div class="row">

		<?php
		if(!empty($_GET['id'])){
		?>

	
		<div class="col-6 form-group">
			<label for="imagem_atual">Imagem Atual:</label><br>
            <img src="../images/galerias/<?=$dados['imagem']?>" alt="" style="height: auto; width:100%">
		</div>

		<?php
		}
		?>

		<div class="col-12">
            <a href="panel.php?m=<?=$pasta?>&a=excluir.php&id=<?=$dados['id']?>&excluir=S" class="btn btn-danger w-100">Excluir</a>
		</div>


	</div>

</form>

<?php

if($_GET['excluir'] == 'S') {
    $tabela = "galeria";
    $pasta  = "galeria";
    $diretorio = "../images/galerias/";

    $status = 'E';
    $id = $_GET['id'];
    $sql = "UPDATE galeria SET status = '$status' WHERE id = '$id'";
    if (!mysqli_query($conn, $sql)) {
        alert('Erro ao excluir a imagem','panel.php?m='.$pasta.'&a=novo.php');
    } else {
        alert('Imagem excluida com sucesso!','panel.php?m='.$pasta.'&a=listar.php');
    }
}
?>