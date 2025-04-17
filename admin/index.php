<?php
session_name('barber_system');
session_start();

include('includes/functions.php');
if (!empty($_SESSION['COD'])) {
	redir('panel.php');
}
?>
<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
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


	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/modo_noturno.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<script src="https://kit.fontawesome.com/156d6a1fcd.js" crossorigin="anonymous"></script>

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
</head>

<body class="bg-yellow-400 flex items-center justify-center min-h-screen">

	<form name="form1" method="post" action="valida_login.php" class="bg-white shadow-lg rounded-2xl px-8 pt-8 pb-6 w-full max-w-sm">

		<h1 class="text-2xl font-semibold text-center mb-6">Sistema Administrativo</h1>

		<div class="mb-4">
			<label for="login" class="block text-gray-700 text-sm font-bold mb-2">Login</label>
			<input type="text" name="login" id="login" value="admin"
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-400">
		</div>

		<div class="mb-6">
			<label for="senha" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
			<input type="password" name="senha" id="senha" value="admin123"
				class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-yellow-400">
		</div>

		<div class="flex items-center justify-center">
			<button type="submit"
				class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
				Entrar
			</button>
		</div>

	</form>

</body>

</html>