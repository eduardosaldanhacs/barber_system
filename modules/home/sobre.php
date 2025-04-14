<section class="bg-1 w-100 h-auto">
	<div class="vetor w-100 py-70 h-auto bg-center bg-repeat-y bg-100 text-center">
		<div class="container">
			<h1 class="text-white fw-bold dosis">Seja bem-vindo à <span class="text-2">Escola Infantil Vovó Olmira</span></h1>
			<div class="text-center">
				<img src="<?php echo SITE ?>images/slices/seta.png" class="img-fluid setinha">
			</div>
		</div>
	</div>
</section>
<section id="sobre" class="w-100 bg-white py-90 h-auto">
	<?php
		$query = "SELECT * FROM identidade";
		$resultado = mysqli_query($conn,$query);
		$dados = mysqli_fetch_assoc($resultado);
	?>
	
	<div class="container">
			<div class="row justify-content-around">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 text-center" id="Missao">
					<div class="wh-200 bd-1 bg-1 mx-auto rounded-circle mb-3 d-flex align-items-center justify-content-center flex-column">
						<img src="<?php echo SITE ?>images/slices/missao.png" alt="Missão" class="img-fluid mx-auto">
						<h2 class="mb-0 text-uppercase text-2 dosis mt-2">Missão</h2>
					</div>
						<?=$dados['missao']; ?>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 text-center" id="Visao">
					<div class="wh-200 bd-1 bg-1 mx-auto rounded-circle mb-3 d-flex align-items-center justify-content-center flex-column">
						<img src="<?php echo SITE ?>images/slices/visao.png" alt="Visão" class="img-fluid mx-auto">
						<h2 class="mb-0 text-uppercase text-2 dosis mt-2">Visão</h2>
					</div>
						<?=$dados['visao']; ?>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 text-center" id="Valores">
					<div class="wh-200 bd-1 bg-1 mx-auto rounded-circle mb-3 d-flex align-items-center justify-content-center flex-column">
						<img src="<?php echo SITE ?>images/slices/valores.png" alt="Valores" class="img-fluid mx-auto">
						<h2 class="mb-0 text-uppercase text-2 dosis mt-2">Valores</h2>
					</div>
						<?=$dados['valores']; ?>
				</div>
			</div>
		</div>
</section>
<!--<div class="w-100 text-center pb-90">
	<div class="container">
		<h2 class="text-1 fw-bold dosis">Estamos <span class="text-2">CREDENCIADOS</span> pelo Conselho Municipal de Educação desde 2012</h2>
	</div>
</div>-->
<script>

var Missao = document.getElementById('Missao');
var Visao = document.getElementById('Visao');
var Valores = document.getElementById('Valores');


if (Missao || Visao || Valores) {

    var paragrafo1 = Missao.querySelector('p');
	var paragrafo2 = Visao.querySelector('p');
	var paragrafo3 = Valores.querySelector('p');

    if (paragrafo1 || paragrafo2 || paragrafo3) {
        paragrafo1.classList.add('text-center', 'text-secondary', 'fw-light', 'fsize-15', 'poppins', 'w-85', 'mx-auto');
		paragrafo2.classList.add('text-center', 'text-secondary', 'fw-light', 'fsize-15', 'poppins', 'w-85', 'mx-auto');
		paragrafo3.classList.add('text-center', 'text-secondary', 'fw-light', 'fsize-15', 'poppins', 'w-85', 'mx-auto');
    } else {
        console.error('Parágrafo não encontrado dentro da div.');
    }
} else {
    console.error('Div externa não encontrada.');
}
</script>
