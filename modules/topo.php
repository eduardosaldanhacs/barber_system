<div id="home"></div>
<div class="w-100 h-auto pt-3 bg-1">
	<div class="container">
		<h5 class="mb-0 text-2 fw-bold dosis text-xl-right text-lg-right text-md-right text-sm-center text-center">
			<i class="fas fa-phone-alt"></i> (51) 3315-5733 / (51) 99170-5377
		</h5>
	</div>
</div>

<header id="sp-header" class="menu-fixed-out bg-1 w-100 px-3 poppins">

	<nav role='navigation' class="navbar navbar-expand-lg " id="mainNav">

		<a class="navbar-brand bg-contain bg-norepeat bg-center p-0" href="<?php echo SITE ?>"></a>

		<button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">

			<ul class="navbar-nav ml-auto border-top pt-3">

				<li class="nav-item">

					<a class="nav-link link_menu scroll" href="<?php echo SITE ?>#home">Home</a>

				</li>

				<li class="nav-item">

					<a class="nav-link link_menu scroll" href="<?php echo SITE ?>#sobre">Sobre nós</a>

				</li>

				<!-- <li class="nav-item dropdown sub">

					<a class="nav-link dropdown-toggle">

						Cardápio

					</a>



					<div class="dropdown-menu sub_menu" id="open">

						<?

						$servicos = "SELECT * FROM banners WHERE (status = 'S' OR status IS NULL OR status = '') ORDER BY ordem ASC";

						$servicos = mysqli_query($conn, $servicos);

						while ($servico = mysqli_fetch_array($servicos)) {

						?>

							<a class="dropdown-item" href="<?php echo SITE ?>content/banners/<?= $servico['imagem'] ?>" target="_blank"><?= $servico['titulo'] ?></a>

						<?

						}

						?>

					</div>

				</li> -->

				<li class="nav-item">

					<a class="nav-link link_menu scroll" href="<?php echo SITE ?>#estrutura">Estrutura e Turmas</a>

				</li>

				<li class="nav-item">
					<?php
						$query = "SELECT imagem FROM galeria WHERE status = 'S' LIMIT 1";
						$resultado = mysqli_query($conn, $query);
						$galeria = mysqli_fetch_assoc($resultado);
						$imagem = $galeria['imagem'];
					?>
					<a class="nav-link link_menu" href="<?php echo SITE ?>images/galerias/<?= $imagem ?>" data-fancybox="galeria">Galeria</a>

				</li>

				<li class="nav-item">

					<a class="nav-link link_menu scroll" href="<?php echo SITE ?>#contato">Contato</a>

				</li>

			</ul>

		</div>

	</nav>

</header>
<?php
		$query = "SELECT * FROM banners";
		$resultado = mysqli_query($conn, $query);
?>
<div id="banners" class="carousel slide carousel-fade bg-1" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
            $primeira = true;
            while ($banners = mysqli_fetch_array($resultado)) {
				if($banners['status'] != 'N' && $banners['status'] != 'E'):
                $classe_ativa = $primeira ? 'active' : '';
                ?>
                <div class="carousel-item <?php echo $classe_ativa; ?>">
                    <img src="<?php echo SITE ?>images/banners/<?= $banners['imagem'] ?>" class="d-block w-100" alt="...">
                </div>
                <?php 
                $primeira = false;
				endif;
            } 
        ?>
    </div>

    <a class="carousel-control-prev" href="#banners" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#banners" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php 
		$query = "SELECT * FROM galeria WHERE status = 'S' LIMIT 30 OFFSET 1 ";
		$resultado = mysqli_query($conn, $query);
?>
<div class="d-none">
	<?php  
		$primeira = true;
		while ($galeria = mysqli_fetch_array($resultado)) {  
			$classe_ativa = $primeira ? 'active' : '';
			?>
			<a href="<?php echo SITE ?>images/galerias/<?= $galeria['imagem'] ?>" data-fancybox="galeria"></a>
			<?php 
			$primeira = false;
		} 
	?>
</div>

