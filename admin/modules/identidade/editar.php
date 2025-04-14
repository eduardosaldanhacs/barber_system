<?php



	$tabela = "identidade";

	$pasta  = "identidade";

	
	$button = "Editar";

	
	$query = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conn,$query);
	$dados = mysqli_fetch_assoc($resultado);

	$action = "panel.php?m=$pasta&a=atualizar.php";
?>

<div class="col-12 form-group">

	<ul class="list-group">

		<li class="list-group-item active mb-3"><?=$button?> Identidade</li>

	</ul>

</div>
<form method="post" action="<?= $action ?>" enctype="multipart/form-data">

	<div class="col-12 mx-auto">
		<div class="row">
		<?php
			$acao = $_GET['acao'];
			switch($acao) {
				case 'missao':
				?>
					<div class="col-12 form-group">
						<h3>Missao</h3>
						<textarea name="missao" id="missao" rows="3" class="ckeditor"><?= $dados['missao'] ?></textarea>
					</div>
				<?php
				break;
				case 'visao':
				?>
					<div class="col-12 form-group">
						<h3>Visão</h3>
						<textarea name="visao" id="visao" rows="3" class="ckeditor"><?= $dados['visao'] ?></textarea>
					</div>
				<?php
				break;
				case 'valores':
				?>
					<div class="col-12 form-group">
						<h3>Valores</h3>
						<textarea name="valores" id="valores" rows="3" class="ckeditor"><?= $dados['valores'] ?></textarea>
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
