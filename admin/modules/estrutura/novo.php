<?php



	$tabela = "estrutura";
	$pasta  = "estrutura";

	

	if(!empty($_GET['id'])){
		$id = $_GET['id'];

		$query = "SELECT * FROM $tabela WHERE id = {$_GET['id']}";
		$query = mysqli_query($conn,$query);
		$dados = mysqli_fetch_array($query);
		$categoria = $dados['categoria'];
		$imagem = $dados['imagem'];
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

	<ul class="list-group">

		<li class="list-group-item active"><?=$button?> banners</li>

	</ul>

</div>

<form method="post" action="<?=$action?>" enctype="multipart/form-data">

	<div class="row">

		

		<div class="col-6 form-group">
			<label for="imagem">Imagem</label>
			<input type="hidden" name="id" value="<?=$_GET['id']?>">
			<input id="imagem" type="file" name="imagem1" class="form-control-file">
		</div>

		<?php
		if(!empty($_GET['id'])){
		?>

	
		<div class="col-6 form-group">
			<label for="imagem_atual">Capa Atual:</label>
			<a target="_blank" href="../images/estruturas/<?= $categoria ?>/<?= $imagem ?>">Clique aqui para abrir</a>
		</div>

	
		<?php
		}
		?>

		<div class="col-12 form-group">
			<label for="categoria">Categoria</label>
			<select class="custom-select" name="categoria" id="categoria">
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'bercario1' ? "selected" : NULL?> value="bercario1">Bercario 1</option>
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'bercario2' ? "selected" : NULL?> value="bercario2">Bercario 2</option>
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'maternal1' ? "selected" : NULL?> value="maternal1">Maternal 1</option>
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'maternal2' ? "selected" : NULL?> value="maternal2">Maternal 2</option>
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'jardim1' ? "selected" : NULL?> value="jardim1">Jardim 1</option>
				<option <?=!empty($_GET['id']) && $dados['categoria'] == 'jardim2' ? "selected" : NULL?> value="jardim2">Jardim 2</option>
			</select>
		</div>

		<div class="col-12 form-group">
			<label for="principal">Imagem principal</label>
			<select class="custom-select" name="principal" id="principal">
				<option <?=!empty($_GET['id']) && $dados['principal'] == 'N' ? "selected" : NULL?> value="N">Não</option>
				<option <?=!empty($_GET['id']) && $dados['principal'] == 'S' ? "selected" : NULL?> value="S">Sim</option>
			</select>
		</div>

		<div class="col-12 form-group">
			<label for="status">Status</label>
			<select class="custom-select" name="status" id="status">
				<option <?=!empty($_GET['id']) && $dados['status'] == 'S' ? "selected" : NULL?> value="S">Ativo</option>
				<option <?=!empty($_GET['id']) && $dados['status'] == 'N' ? "selected" : NULL?> value="N">Inativo</option>
			</select>
		</div>	

		

		<div class="col-12">
			<button type="submit" class="btn btn-primary w-100"><?=$button?></button>
		</div>

		

	</div>

</form>