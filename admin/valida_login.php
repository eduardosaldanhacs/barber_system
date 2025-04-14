<?php

	header("Content-Type: text/html; charset=ISO-8859-1", true);
	session_name('sistema_vovo_olmira');

	session_start();

	require_once('includes/connect.php');

	require_once('includes/functions.php');

	$erro = false;

	if (empty($_POST['login'])) {

		$mensagem = "Preencha corretamente o campo Usúario!!";

		$erro = true;

	}

	

	if (empty($_POST['senha'])) {

		$mensagem .= "Preencha corretamente o campo Senha!!";

		$erro = true;		

	}

		
	if ($erro == true) {
		
	?>
		
		<script>
			alert('<?=$mensagem?>');
		</script>

	<?php
		$_SESSION = array();

		session_destroy();

		redir('index.php');

	}else{

		$login = mysqli_real_escape_string($conn,$_POST['login']);
		$senha = mysqli_real_escape_string($conn,$_POST['senha']);
			
		$query_login = "SELECT * FROM admins WHERE login='$login' AND senha='".md5($senha)."'";
		$mysql_query = mysqli_query($conn,$query_login);

		if (mysqli_num_rows($mysql_query)<1) {
			
		?>
			
			<script>
				alert('Usuário ou senha inválidos!! Tente novamente!');
			</script>
			
		<?php

			$_SESSION = array();

			session_destroy();					

			redir('index.php');

		}else {

			$dados = mysqli_fetch_array($mysql_query);

			$query_update = mysqli_query($conn,"UPDATE admins SET ultimo_login='".date("Y-m-d H:i:s")."' WHERE id='{$dados['id']}'");

			$_SESSION['ID_ADMIN'] 		= $dados['id'];

			$_SESSION['ADMINISTRADOR']	= $dados['login'];

			$_SESSION['NOME'] 			= $dados['nome'];

			$_SESSION['IS_LOGADO'] 		= true;				

			redir('panel.php');

		}

	}

?>	

