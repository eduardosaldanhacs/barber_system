<?php
$tabela = "servicos";
$pasta  = "servicos";
$button = "Editar";
$query = "SELECT * FROM $tabela";
$resultado = mysqli_query($conn, $query);
$dados = mysqli_fetch_assoc($resultado);
$action = "panel.php?m=$pasta&a=cadastrar.php";
?>
<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active mb-3"><?= $button ?> servicos</li>
	</ul>
</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">
	<div class="col-12 mx-auto">
		<div class="row">
			<div class="col-12 form-group">
				<label for="">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control" value="<?= $dados['name'] ?>" placeholder="Nome do serviço" required>
			</div>
			<div class="col-12 form-group">
				<label for="">Descrição</label>
				<textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição do serviço" id=""><?= $dados['description'] ?></textarea>
			</div>
			<div class="col-12 form-group">
				<label for="">Preço</label>
				<input type="text" name="preco" id="preco" class="form-control" value="<?= $dados['price'] ?>" placeholder="Preço do serviço" required>
			</div>

		</div>
	</div>
	<div class="col-12">
		<button type="submit" class="btn btn-primary w-100"><?= $button ?></button>
	</div>
	</div>
</form>