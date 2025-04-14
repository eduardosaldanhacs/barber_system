<?php
	$tabela = "servicos";
	$pasta  = "servicos";
	$filtro = "";
	if(!empty($_GET['status'])){
		$filtro.= "AND $tabela.status = '{$_GET['status']}'";
	}
	$query = "SELECT * FROM $tabela";
    $resultado = mysqli_query($conn,$query);
?>

<div class="col-12 form-group">
	<ul class="list-group color_font_black">
		<?php while($dados = mysqli_fetch_array($resultado)){ ?>
		<li class="list-group-item active">Serviços</li>
		<div id='sortable'>
			<li class="list-group-item" id="<?=$dados['id']?>">
			<div class="row mb-2">
				<div class="col-2 col-xl-2 d-flex align-items-center justify-content-center">
					<h5 class="text-primary"><?= $dados['name'] ?></h5>
				</div>
				<div class="col-12 col-xl-8">
					<textarea class="form-control" name="conhecer" id="conhecer" rows="3" class="w-100" placeholder="<?= $dados['description'] ?>" readonly></textarea>
				</div>
				<div class="col-12 col-xl-2 text-center d-flex align-items-center justify-content-center">
					<a href="panel.php?m=<?=$pasta?>&a=novo.php" class="btn btn-outline-primary mr-1">Editar</a>
				</div>
			</div>
		</div>
		<?php } ?>
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
</script>
