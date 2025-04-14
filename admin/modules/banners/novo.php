<?php
	$tabela = "banners";
	$pasta  = "banners";
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
			<a target="_blank" href="../images/banners/<?=$dados['imagem']?>">Clique aqui para abrir</a>
		</div>
		<?php
		}
		?>
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