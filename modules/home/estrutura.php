<div class="w-100 h-150 bg-repeat-x bg-contain bg-left mtn-50" style="background-image: url('<?php echo SITE ?>images/detalhe.png');"></div>
<?php 
	$query = "SELECT texto FROM textos WHERE categoria = 'estrutura'";
	$resultado = mysqli_query($conn, $query);
	$dados = mysqli_fetch_assoc($resultado);
?>
<section id="estrutura" class="w-100 bg-white py-90 h-auto">
	<div class="container text-center" id="Texto">
		<h1 class="text-1 fw-bold dosis mb-4">Nossa <span class="text-2">estrutura</span> e turmas disponíveis</h1>
			<?= $dados['texto'] ?>
		<div class="row justify-content-around pt-5">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'bercario1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="bercario1" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Berçario 1</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'bercario1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>
			

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'bercario2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="bercario2" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Berçario 2</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'bercario2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'maternal1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="maternal1" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Maternal 1</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'maternal1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'maternal2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="maternal2" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Maternal 2</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'maternal2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>
			

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'jardim1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="jardim1" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Jardim 1</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'jardim1' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
				<?php
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'jardim2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$imagem= $estrutura['imagem'];
							$categoria = $estrutura['categoria'];
							?>
				<div class="estruturas-opcoes efeito cp" data-fancybox="jardim2" href="<?php echo SITE ?>images/estruturas/<?=$categoria ?>/<?= $imagem ?>">
					<h4 class="bg-2 rounded-3-tops text-1 mb-0 py-3 fw-bold text-center dosis text-uppercase">Jardim 2</h4>
						<?php 
							$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'S' AND categoria = 'jardim2' LIMIT 1";
							$resultado = mysqli_query($conn, $query);
							$estrutura = mysqli_fetch_assoc($resultado);
							$categoria = $estrutura['categoria'];
							$imagem_principal = $estrutura['imagem'];
						?>
					<div class="w-100 bg-cover bg-center bg-norepeat h-200" style="background-image: url('<?php echo SITE ?>images/estruturas/<?= $categoria ?>/<?= $imagem_principal ?>"></div>
					<button type="button" class="btn btn-secondary bg-1 text-white px-5 btn-block border-0 rounded-0 py-3 poppins fw-bold text-uppercase rounded-3-bottoms">Veja mais</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BERÇARIO 1 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'bercario1' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="bercario1"></a>
	<?php } ?>
</div>

<!-- BERÇARIO 1 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'bercario2' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="bercario2"></a>
	<?php } ?>
</div>

<!-- MATERNAL 1 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'maternal1' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="maternal1"></a>
	<?php } ?>
</div>

<!-- MATERNAL 2 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'maternal2' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="maternal2"></a>
	<?php } ?>
</div>

<!-- JARDIM 1 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'jardim1' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="jardim1"></a>
	<?php } ?>
</div>

<!-- JARDIM 2 -->
<div class="d-none">
	<?php 
	$query = "SELECT categoria, imagem FROM estrutura WHERE status = 'S' AND principal = 'N' AND categoria = 'jardim2' LIMIT 30 OFFSET 1";
	$resultado = mysqli_query($conn, $query);
	while($estrutura = mysqli_fetch_array($resultado)) { ?>
		<a href="<?php echo SITE ?>images/estruturas/<?= $estrutura['categoria'] ?>/<?= $estrutura['imagem'] ?>" data-fancybox="jardim2"></a>
	<?php } ?>
</div>


<script>

var Texto = document.getElementById('Texto');



if (Texto) {

    var paragrafo1 = Texto.querySelector('p');
	
    if (paragrafo1) {
        paragrafo1.classList.add('text-justify', 'text-secondary', 'fw-light', 'fsize-16', 'poppins', 'w-90', 'mx-auto');
    } else {
        console.error('Parágrafo não encontrado dentro da div.');
    }
} else {
    console.error('Div externa não encontrada.');
}
</script>
