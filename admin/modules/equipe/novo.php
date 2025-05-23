<?php
$table = "team";
$pasta  = "team";
$caminho  = "equipe";
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM $table WHERE id = {$_GET['id']}";
	$query = mysqli_query($conn, $query);
	$dados = mysqli_fetch_array($query);
	$action = "panel.php?m=$caminho&a=atualizar.php&id=$id";
	$button = "Atualizar";
} else {
	$action = "panel.php?m=$caminho&a=cadastrar.php";
	$button = "Cadastrar";
}
?>

<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active"><?= $button ?>Equipe</li>
	</ul>
</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">
	<div class="row">
		<div class="col-12 form-group">
			<label for="imagem">Imagem</label>
			<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
			<input id="imagem" type="file" name="image" class="form-control-file">
		</div>
		<?php
		if (!empty($_GET['id'])) {
		?>
			<div class="col-12 form-group">
				<label for="imagem_atual">Imagem Atual:</label>
				<a target="_blank" href="<?= SITE ?>images/equipe/<?= $dados['image'] ?>">Clique aqui para abrir</a>
			</div>
		<?php
		}
		?>
		<div class="col-6 form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" class="form-control" value="<?= $dados['name'] ? $dados['name'] : NULL ?>" placeholder="Nome" required maxlength="50">
		</div>
		<div class="col-6 form-group">
			<label for="lastname">Sobrenome</label>
			<input type="text" name="lastname" id="lastname" class="form-control" value="<?= $dados['lastname'] ? $dados['lastname'] : NULL ?>" placeholder="Sobrenome" required maxlength="100">
		</div>

		<div class="col-3 form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" id="cpf" class="form-control" value="<?= $dados['cpf'] ?>" placeholder="Preencha o cpf" required>
		</div>
		
		<div class="col-4 form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" value="<?= $dados['email'] ?>" placeholder="Preencha o email" required>
		</div>
		
		<div class="col-2 form-group">
			<label for="age">Idade</label>
			<input type="text" name="age" id="age" class="form-control" value="<?= $dados['age'] ?>" placeholder="Idade" required min="0" max="99" maxlength="2">
		</div>
		<div class="col-3 form-group">
			<label for="phone">Telefone</label>
			<input type="text" name="phone" id="phone" class="form-control" value="<?= $dados['phone'] ?>" placeholder="Telefone" required>
		</div>

		<div class="col-8 form-group">
			<label for="description">Descrição</label>
			<input type="text" name="description" id="description" class="form-control" value="<?= $dados['description'] ?>" placeholder="Preencha a descrição">
		</div>
		
		<div class="col-4 form-group">
			<label for="status">Status</label>
			<select class="custom-select" name="state" id="status">
				<option <?= !empty($_GET['id']) && $dados['state'] == 'S' ? "selected" : NULL ?> value="S">Ativo</option>
				<option <?= !empty($_GET['id']) && $dados['state'] == 'N' ? "selected" : NULL ?> value="N">Inativo</option>
			</select>
		</div>
		<div class="col-12">
			<input type="hidden" name="id" value="<?= $_GET['id'] ? $_GET['id'] : NULL ?>">
			<button type="submit" class="btn btn-success w-100"><?= $button ?></button>
		</div>
	</div>
</form>