<?php
$tabela = "servicos";
$pasta  = "servicos";
$button = "Editar";
if ($_GET['id']) {
	$query = "SELECT * FROM $tabela";
	$resultado = mysqli_query($conn, $query);
	$dados = mysqli_fetch_assoc($resultado);
} else {
	$action = "panel.php?m=$pasta&a=cadastrar.php";
}
?>
<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active mb-3"><?= $button ?> servicos</li>
	</ul>
</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">
	<div class="col-12 form-group">
		<label for="">Nome</label>
		<input type="text" name="nome" id="nome" class="form-control" value="<?= $dados['name'] ?>" placeholder="Nome do serviço" required>
	</div>
	<div class="col-12 form-group">
		<label for="">Descrição</label>
		<textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do serviço" id=""><?= $dados['description'] ?></textarea>
	</div>
	<div class="col-12 form-group">
		<label>Preço:</label>
		<input type="number" step="0.01" min="0" name="preco" id="preco" class="form-control" value="<?= $dados['price'] ?>" placeholder="Preço" required>
	</div>
	<div class="col-12 form-group">
		<label for="">Situação</label>
		<select name="status" id="state" class="form-control" required>
			<option value="S" <?= $dados['state'] == 'S' ? "selected" : NULL ?>>Publicado</option>
			<option value="N" <?= $dados['state'] == 'N' ? "selected" : NULL ?>>Oculto</option>
		</select>
	</div>
	<div class="col-12">
		<button type="submit" class="btn btn-success w-100"><?= $button ?></button>
	</div>
	</div>
</form>