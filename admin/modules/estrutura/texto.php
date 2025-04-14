<?php



	$tabela = "textos";
	$pasta  = "estrutura";

	


		$id = $_GET['id'];

		$query = "SELECT * FROM $tabela WHERE categoria = 'estrutura'";
		$query = mysqli_query($conn,$query);
		$dados = mysqli_fetch_assoc($query);



		$action = "panel.php?m=$pasta&a=texto.php&acao=atualizar";
		$button = "Atualizar";

if($_GET['acao'] == "atualizar") {

        $texto = $_POST['texto'];
        $query = "UPDATE textos SET texto = ? WHERE categoria = 'estrutura'";

            $stmt = mysqli_prepare($conn, $query);
        
            if($stmt) {
                mysqli_stmt_bind_param($stmt, "s", $texto);
        
                if(mysqli_stmt_execute($stmt)) {
                    alert('Texto atualizado com sucesso!','panel.php?m='.$pasta.'&a=texto.php');
                } else {
                    alert('Erro ao atualizar a texto','panel.php?m='.$pasta.'&a=texto.php');
                }
        
                mysqli_stmt_close($stmt);
            } else {
                alert('Erro ao preparar a instrução SQL','panel.php?m='.$pasta.'&a=editar.php');
            }
        } else {
            
    

?>

<div class="col-12 form-group">

	<ul class="list-group">

		<li class="list-group-item active">Alterar texto</li>

	</ul>

</div>

<form method="post" action="<?=$action?>" enctype="multipart/form-data">

	<div class="row">


		<div class="col-12 form-group">
			<textarea name="texto" id="texto" class="ckeditor"><?= $dados['texto'] ?></textarea>
		</div>


		<div class="col-12">
			<button type="submit" class="btn btn-primary w-100"><?=$button?></button>
		</div>

		

	</div>

</form>

<?php } ?>