<?php



	$tabela = "identidade";

	$pasta  = "identidade";



	$filtro = "";



	if(!empty($_GET['status'])){

		$filtro.= "AND $tabela.status = '{$_GET['status']}'";

	}



	$query = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conn,$query);
	$dados = mysqli_fetch_assoc($resultado);


?>

<div class="col-12 form-group">

	<ul class="list-group color_font_black">

		<li class="list-group-item active">Identidade da Empresa</li>

		<div id='sortable'>

		
			<li class="list-group-item" id="<?=$dados['id']?>">

		<div class="row mb-2">
			<div class="col-2 col-xl-2 d-flex align-items-center justify-content-center">
				<h4 class="text-primary">Missão</h4>
			</div>

			<div class="col-12 col-xl-8">
				<textarea class="form-control" name="missao" id="missao" rows="3" class="w-100" placeholder="<?= $dados['missao'] ?>" readonly></textarea>
			</div>

			<div class="col-12 col-xl-2 text-center d-flex align-items-center justify-content-center">
				<a href="panel.php?m=<?=$pasta?>&a=editar.php&acao=missao" class="btn btn-outline-primary mr-1">Editar</a>
			</div>
		</div>

		<div class="row mb-2">
			<div class="col-2 col-xl-2 d-flex align-items-center justify-content-center">
				<h4 class="text-primary">Visão</h4>
			</div>

			<div class="col-12 col-xl-8">
				<textarea class="form-control" name="visao" id="visao" rows="3" class="w-100" placeholder="<?= $dados['visao'] ?>" readonly></textarea>
			</div>

			<div class="col-12 col-xl-2 text-center d-flex align-items-center justify-content-center">
				<a href="panel.php?m=<?=$pasta?>&a=editar.php&acao=visao" class="btn btn-outline-primary mr-1">Editar</a>
			</div>
		</div>

		<div class="row">
			<div class="col-2 col-xl-2 d-flex align-items-center justify-content-center">
				<h4 class="text-primary">Valores</h4>
			</div>

			<div class="col-12 col-xl-8">
				<textarea class="form-control" name="valores" id="" rows="3" class="w-100" placeholder="<?= $dados['valores'] ?>" readonly></textarea>
			</div>

			<div class="col-12 col-xl-2 text-center d-flex align-items-center justify-content-center">
				<a href="panel.php?m=<?=$pasta?>&a=editar.php&acao=valores" class="btn btn-outline-primary mr-1">Editar</a>
			</div>
		</div>

		</div>


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
