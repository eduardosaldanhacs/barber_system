<?php
$tabela = "servicos";
$pasta  = "servicos";
$filtro = "";
if (!empty($_GET['status'])) {
	$filtro .= "AND $tabela.status = '{$_GET['status']}'";
}
$query = "SELECT * FROM $tabela";
$resultado = mysqli_query($conn, $query);
?>

<div class="col-12 form-group">
	<ul class="list-group color_font_black">
		<li class="list-group-item active">Lista de Serviços</li>
		<li class="list-group-item">
			<form class="row" method="get" action="">
				<input type="hidden" name="m" value="<?= $pasta ?>">
				<input type="hidden" name="a" value="listar.php">
				<div class="col-12 col-xl-9">
					<?= status(); ?>
				</div>
				<div class="col-3 col-xl-2 text-center margin_label">
					<input class="btn btn-primary w-100" type="submit" value="Buscar" />
				</div>
				<div class="col-3 col-xl-1 text-center margin_label">
					<a href="panel.php?m=<?= $pasta ?>&a=novo.php" class="btn btn-outline-success">Novo</a>
				</div>
			</form>
		</li>
		<li class="list-group-item">
			<div class="row">
				<div class="col-12 col-xl-3">
					<strong>Nome</strong>
				</div>
				<div class="col-12 col-xl-3">
					<strong>Descrição</strong>
				</div>
				<div class="col-12 col-xl-3">
					<strong>Valor</strong>
				</div>
				<div class="col-12 col-xl-3 text-center">
					<strong>Ações</strong>
				</div>
			</div>
		</li>
		<?php while ($dados = mysqli_fetch_array($resultado)) { ?>
			<div id='sortable'>
				<li class="list-group-item" id="<?= $dados['id'] ?>">
					<div class="row mb-2">
						<div class="col-2 col-xl-3">
							<?= $dados['name'] ?>
						</div>
						<div class="col-12 col-xl-3">
							<?= $dados['description'] ?>
						</div>
						<div class="col-12 col-xl-3">
							<?= $dados['price'] ?>
						</div>
						<div class="col-12 col-xl-3 text-center d-flex align-items-center justify-content-center">
							<a href="panel.php?m=<?= $pasta ?>&a=novo.php" class="btn btn-outline-primary mr-1">Editar</a>
						</div>
					</div>
				</li>
			</div>
		<?php } ?>
	</ul>
</div>
<script>
	$("#sortable").sortable({
		update: function() {
			var lista = $('#sortable').sortable('toArray');
			$.post("<?= SITE ?>admin/modules/<?= $pasta ?>/ordenar.php", {
				cardapios: lista
			}, function() {
				//			alert('Sucesso');
			});
		}
	});
</script>