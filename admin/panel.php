<?php
session_name('sistema_vovo_olmira');
session_start();

include('includes/functions.php');
include('includes/connect.php');
include('../define.php');

if (empty($_SESSION['NOME']) || empty($_SESSION['ID_ADMIN']) || empty($_SESSION['ADMINISTRADOR']) || $_SESSION['IS_LOGADO'] != true) {
	redir('index.php');
}

?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Sistema Administrativo</title>

	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/modo_noturno.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">


	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	<!--        <script src="js/menu.js"></script>-->

	<!---------------------------------ALERT SPECIAL--------------------------------------->
	<script type="text/javascript" src="js/alertify/alertify.js"></script>
	<link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="js/alertify/css/themes/default.min.css">
	<!---------------------------------ALERT SPECIAL--------------------------------------->

	<!-----------------------------------CKEDITOR------------------------------------------>
	<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
	<!-----------------------------------CKEDITOR------------------------------------------>

	<!--        <script type="text/javascript" src="js/jquery.mask.min.js"></script>-->

	<script type="text/javascript" src="js/functions.js"></script>

	<!--		<script src="js/jquery.numeric.js"></script>-->

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="js/ajax.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

	<!--  Sortable -->

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$(function() {
			$("#sortable").sortable({
				scroll: true,
				scrollSensitivity: 20
			});
			$("#sortable").disableSelection();
		});
	</script>

	<style>
		html,
		body {
			max-width: 100%;
		}
	</style>
</head>

<body class="">

	<div class="menu_lateral">
		<?php include('modules/menu/menu.php'); ?>
	</div>

	<div id="corpo">

		<nav class="menu_topo navbar navbar-expand-lg">
			<a id="menuToggle" class="menutoggle pull-left">
				<i class="fa fa fa-tasks"></i>
			</a>
			<div class="button_modo_noturno">
				<label class="switch">
					<input type="checkbox" id="night-mode" aria-label="night-mode">
					<span class="slider round"></span>
				</label>
				<span class="titulo_modo_noturno">Modo Noturno</span>
			</div>
			<div>
				<a href="logoff.php" class="btn btn-primary float-right">Sair</a>
			</div>
		</nav>
		<!--<script type="text/javascript" src="js/menu.js"></script>-->
		<div class="container-fluid">
			<?php
			if (isset($_GET['m']) && isset($_GET['a'])) {
				if (!file_exists('modules/' . $_GET['m'] . '/' . $_GET['a'])) {
					redir('panel.php');
				} else {
					include('modules/' . $_GET['m'] . '/' . $_GET['a']);
				}
			} else {
				include('modules/home/entrada.php');
			}
			?>
		</div>

	</div>

	<script>
		$('#menuToggle').on('click', function(event) {
			$('body').toggleClass('open');
			$('#corpo').css('-webkit-transition', 'all 0.25s ease', 'transition', 'all 0.25s ease');
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


	<script>
		$('.preco').mask('000.000.000.000.000,00', {
			reverse: true
		});

		// pegamos o valor no localStorage
		const nightModeStorage = localStorage.getItem('gmtNightMode')
		const openStorage = localStorage.getItem('gmtOpen')
		const nightMode = document.querySelector('#night-mode')
		const open = document.querySelector('#menuToggle')

		// caso tenha o valor no localStorage
		if (nightModeStorage) {
			// ativa o night mode
			document.body.classList.add('modo_noturno')

			// já deixa o input marcado como ativo
			nightMode.checked = true
		}

		if (openStorage) {
			// ativa o night mode
			document.body.classList.add('open')
		}

		// ao clicar mudaremos as cores
		nightMode.addEventListener('click', () => {
			// adiciona a classe `night-mode` ao html
			document.body.classList.toggle('modo_noturno')

			// se tiver a classe night-mode
			if (document.body.classList.contains('modo_noturno')) {
				// salva o tema no localStorage
				localStorage.setItem('gmtNightMode', true)
				return
			}
			// senão remove
			localStorage.removeItem('gmtNightMode')
		})

		open.addEventListener('click', () => {
			// adiciona a classe `night-mode` ao html

			// se tiver a classe night-mode
			if (document.body.classList.contains('open')) {
				// salva o tema no localStorage
				localStorage.setItem('gmtOpen', true)
				return
			}
			// senão remove
			localStorage.removeItem('gmtOpen')
		})
	</script>


</body>

</html>