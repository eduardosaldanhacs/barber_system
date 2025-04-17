<?php
$table = "team";
$folder  = "equipe";
$path = "equipe";
$filter = "";
if (!empty($_GET['state'])) {
	$filter .= "AND $table.state = '{$_GET['state']}'";
}
$query = "SELECT * FROM $table WHERE id != 0 AND deleted_at IS NULL $filter ORDER by ordem ASC";
$query = mysqli_query($conn, $query);
$qtd_cardapios = mysqli_num_rows($query);
?>
<div class="col-12 form-group">
	<ul class="list-group color_font_black">
		<li class="list-group-item active">Lista de Funcionários</li>
		<li class="list-group-item">
			<form class="row" method="get" action="">
				<input type="hidden" name="m" value="<?= $folder ?>">
				<input type="hidden" name="a" value="listar.php">
				<div class="col-12 col-xl-9">
					<?= state(); ?>
				</div>
				<div class="col-3 col-xl-2 text-center margin_label">
					<input class="btn btn-primary w-100" type="submit" value="Buscar" />
				</div>
				<div class="col-3 col-xl-1 text-center margin_label">
					<a href="panel.php?m=<?= $path ?>&a=novo.php" class="btn btn-outline-success">Novo</a>
				</div>
			</form>
		</li>
		<?php
		if ($qtd_cardapios > 0) {
		?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-12 col-xl-3">
						Imagem
					</div>
					<div class="col-12 col-xl-4">
						Informações
					</div>
					<div class="col-12 col-xl-2">
						Status
					</div>
					<div class="col-12 col-xl-3 text-center">
						Ações
					</div>
				</div>
			</li>
			<div id='sortable'>
				<?php
				while ($dados = mysqli_fetch_array($query)) { ?>
						<li class="list-group-item" id="<?= $dados['id'] ?>">
							<div class="row">
								<div class="col-12 col-xl-3">
									<img src="../images/<?= $folder ?>/<?= $dados['image'] ?>" alt="" class="zoomable-image" style="width: 150px; height: auto;">
								</div>
								<div class="col-12 col-xl-4 d-flex flex-column justify-content-center">
									<p><strong>Nome: </strong> <?= $dados['name'] ?> <?= $dados['lastname'] ?></p>
									<p><strong>CPF: </strong> <?= $dados['cpf'] ?></p>
									<p><strong>Telefone: </strong>: <?= $dados['phone'] ?></p>
									<p><strong>Email: </strong> <?= $dados['email'] ?></p>
									<p><strong>Idade: </strong> <?= $dados['age'] ?></p>
									<p><strong>Descrição: </strong> <?= $dados['description'] ?></p>
								</div>
								<div class="col-12 col-xl-2 d-flex align-items-center">
									<?= $dados['state'] == 'N' ? "Inativo" : "Ativo" ?>
								</div>
								<div class="col-12 col-xl-3 text-center d-flex align-items-center justify-content-center">
									<a href="panel.php?m=<?= $path ?>&a=novo.php&id=<?= $dados['id'] ?>" class="btn btn-info mr-1">Editar</a>
									<a href="panel.php?m=<?= $path ?>&a=excluir.php&id=<?= $dados['id'] ?>" class="btn btn-danger">Excluir</a>
								</div>
							</div>
						</li>
				<?php
				}
				?>
			</div>
		<?php
		} else {
		?>
			<li class="list-group-item">
				<div class="col-12">
					<button class="btn btn-outline-primary">Nada Encontrado.</button>
				</div>
			</li>
		<?php
		}
		?>
	</ul>
</div>
<script>
	$("#sortable").sortable({
		update: function() {
			var lista = $('#sortable').sortable('toArray');
			$.post("<?= SITE ?>admin/modules/<?= $folder ?>/ordenar.php", {
				equipe: lista
			}, function() {
				//			alert('Sucesso');
			});
		}
	});
	document.addEventListener("DOMContentLoaded", function() {
		var images = document.querySelectorAll(".zoomable-image");
		var zoomedImage = null;
		images.forEach(function(image) {
			image.addEventListener("click", function() {
				if (zoomedImage !== null) {
					zoomedImage.classList.remove("zoomed");
				}
				if (this !== zoomedImage) {
					this.classList.add("zoomed");
					zoomedImage = this;
				} else {
					zoomedImage = null;
				}
			});
		});
	});
</script>
<style>
	/* Estilo base da imagem */
	.zoomable-image {
		width: 150px;
		height: auto;
		transition: transform 0.3s;
	}

	/* Estilo da imagem quando ela está ampliada */
	.zoomable-image.zoomed {
		transform: scale(2.5);
		z-index: 1000;
		position: absolute;
		top: 50%;
		left: 50%;
		transform-origin: center center;
		cursor: zoom-out;
	}
</style>