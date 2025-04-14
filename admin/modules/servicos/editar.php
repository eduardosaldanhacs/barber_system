<?php



	$tabela = "aprendizagens";

	$pasta  = "aprendizagens";

	
	$button = "Editar";

	
	$query = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conn,$query);
	$dados = mysqli_fetch_assoc($resultado);

	$action = "panel.php?m=$pasta&a=atualizar.php";
?>

<div class="col-12 form-group">

	<ul class="list-group">

		<li class="list-group-item active mb-3"><?=$button?> Aprendizagens</li>

	</ul>

</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">

	<div class="col-12 mx-auto">
		<div class="row">
		<?php
			$acao = $_GET['acao'];
			switch($acao) {
				case 'conviver':
				?>
					<div class="col-12 form-group">
						<h3>Conviver</h3>
						<textarea name="conviver" id="conviver" rows="3" class="ckeditor"><?= $dados['conviver'] ?></textarea>
					</div>
				<?php
				break;
				case 'brincar':
				?>
					<div class="col-12 form-group">
						<h3>Brincar</h3>
						<textarea name="brincar" id="brincar" rows="3" class="ckeditor"><?= $dados['brincar'] ?></textarea>
					</div>
				<?php
				break;
				case 'participar':
				?>
					<div class="col-12 form-group">
						<h3>Participar</h3>
						<textarea name="participar" id="participar" rows="3" class="ckeditor"><?= $dados['participar'] ?></textarea>
					</div>
				<?php
				break;
				case 'explorar':
				?>
					<div class="col-12 form-group">
						<h3>Explorar</h3>
						<textarea name="explorar" id="explorar" rows="3" class="ckeditor"><?= $dados['explorar'] ?></textarea>
					</div>
				<?php
				break;
				case 'expressar':
				?>
					<div class="col-12 form-group">
						<h3>Expressar</h3>
						<textarea name="expressar" id="expressar" rows="3" class="ckeditor"><?= $dados['expressar'] ?></textarea>
					</div>
				<?php
				break;
				case 'conhecer':
				?>
					<div class="col-12 form-group">
						<h3>Conhecer-se</h3>
						<textarea name="conhecer" id="conhecer" rows="3" class="ckeditor"><?= $dados['conhecer'] ?></textarea>
					</div>
				<?php
				break;
			}
		?>
		</div>
		<div class="col-12">
				<button type="submit" class="btn btn-primary w-100"><?=$button?></button>
		</div>
	</div>
</form>
