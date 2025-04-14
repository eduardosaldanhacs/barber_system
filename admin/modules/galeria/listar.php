<?php



	$tabela = "galeria";

	$pasta  = "galeria";



	$filtro = "";



	if(!empty($_GET['status'])){

		$filtro.= "AND $tabela.status = '{$_GET['status']}'";

	}



	$query = "SELECT * FROM $tabela WHERE id != 0 $filtro";
    $query = mysqli_query($conn,$query);

	$qtd_cardapios = mysqli_num_rows($query);



?>

<div class="col-12 form-group">

	<ul class="list-group color_font_black">

		<li class="list-group-item active">Lista de Cardápios</li>

		<li class="list-group-item">

			<form class="row" method="get" action="">

				<input type="hidden" name="m" value="<?=$pasta?>">

				<input type="hidden" name="a" value="listar.php">	

				<div class="col-12 col-xl-9">

					<?=status();?>

				</div>

				<div class="col-3 col-xl-2 text-center margin_label">
					<input class="btn btn-primary w-100" type="submit" value="Buscar"/>
				</div>
				<div class="col-3 col-xl-1 text-center margin_label">
				<a href="panel.php?m=<?=$pasta?>&a=novo.php" class="btn btn-outline-success">Novo</a>
				</div>
			</form>

		</li>

		<?php

		if($qtd_cardapios > 0){

		?>

		<li class="list-group-item">

			<div class="row">

				<div class="col-12 col-xl-4">

					Capa

				</div>

				<div class="col-12 col-xl-4">

					Status

				</div>

				<div class="col-12 col-xl-4 text-center">

					Ações

				</div>

			</div>

		</li>

		

		<div id='sortable'>

		

		<?php

		while ($dados=mysqli_fetch_array($query)) { ?>	
			<?php if($dados['status'] != "E"): ?>
			<li class="list-group-item" id="<?=$dados['id']?>">

				<div class="row">
					<div class="col-12 col-xl-4 ">
						<img src="../images/galerias/<?=$dados['categoria']?>/<?= $dados['imagem'] ?>" alt="" class="zoomable-image" style="width: 150px; height: auto;">
					</div>

					<div class="col-12 col-xl-4 d-flex align-items-center">
						<?=$dados['status'] == 'N' ? "Inativo" : "Ativo"?>
					</div>

					<div class="col-12 col-xl-4 text-center d-flex align-items-center justify-content-center">
						<a href="panel.php?m=<?=$pasta?>&a=novo.php&id=<?=$dados['id']?>" class="btn btn-outline-primary mr-1">Editar</a>
						<a href="panel.php?m=<?=$pasta?>&a=excluir.php&id=<?=$dados['id']?>" class="btn btn-outline-danger">Excluir</a>
					</div>
				</div>

			</li>

			<?php 
			endif;
		} ?>

		</div>



		<?php

		}

		else{

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

	   update: function(){

		 var lista = $('#sortable').sortable('toArray'); 

		 $.post("<?=SITE?>admin/modules/<?=$pasta?>/ordenar.php",{cardapios:lista}, function(){

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