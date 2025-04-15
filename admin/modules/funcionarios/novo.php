<?php
$table = "employees";
$pasta  = "employees";
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM $table WHERE id = {$_GET['id']}";
	$query = mysqli_query($conn, $query);
	$dados = mysqli_fetch_array($query);
	$action = "panel.php?m=$pasta&a=atualizar.php&id=$id";
	$button = "Atualizar";
} else {
	$action = "panel.php?m=$pasta&a=cadastrar.php";
	$button = "Cadastrar";
	$dados  = "";
}
?>

<div class="col-12 form-group">
	<ul class="list-group">
		<li class="list-group-item active"><?= $button ?>Equipe</li>
	</ul>
</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">
	<div class="row">
		<div class="col-6 form-group">
			<label for="imagem">Imagem</label>
			<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
			<input id="imagem" type="file" name="imagem1" class="form-control-file">
		</div>
		<?php
		if (!empty($_GET['id'])) {
		?>
			<div class="col-6 form-group">
				<label for="imagem_atual">Imagem Atual:</label>
				<a target="_blank" href="../images/employees/<?= $dados['imagem'] ?>">Clique aqui para abrir</a>
			</div>
		<?php
		}
		?>
		<div class="col-12 form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" class="form-control" value="<?= $dados['name'] ?>" placeholder="Nome" required>
		</div>
		<div class="col-12 form-group">
			<label for="lastname">Sobrenome</label>
			<input type="text" name="lastname" id="lastname" class="form-control" value="<?= $dados['lastname'] ?>" placeholder="Sobrenome" required>
		</div>
		<div class="col-12 form-group">
			<label for="age">Idade</label>
			<input type="text" name="age" id="age" class="form-control" value="<?= $dados['age'] ?>" placeholder="Idade" required>
		</div>
		<div class="col-12 form-group">
			<label for="phone">Telefone</label>
			<input type="text" name="phone" id="phone" class="form-control" value="<?= $dados['phone'] ?>" placeholder="Telefone" required>
		</div>

		<div class="col-12 form-group">
			<label for="status">Status</label>
			<select class="custom-select" name="status" id="status">
				<option <?= !empty($_GET['id']) && $dados['status'] == 'S' ? "selected" : NULL ?> value="S">Ativo</option>
				<option <?= !empty($_GET['id']) && $dados['status'] == 'N' ? "selected" : NULL ?> value="N">Inativo</option>
			</select>
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-primary w-100"><?= $button ?></button>
		</div>
	</div>
</form>