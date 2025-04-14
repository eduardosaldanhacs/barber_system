<?php
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha2 = $_POST['repete'];

$erro = 0;

// Verifica se o login já existe
$stmt = $conn->prepare("SELECT * FROM admins WHERE login = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
	alert('Este login já está sendo usado por outro administrador, tente novamente com outro login!', 'panel.php?m=admins&a=novo.php');
	$erro = 1;
}
$stmt->close();

if (empty($senha)) {
	alert('Informe uma senha!', 'panel.php?m=admins&a=novo.php');
	$erro = 1;
} elseif ($senha != $senha2) {
	alert('Senha e confirmação de senha diferentes. Tente novamente', 'panel.php?m=admins&a=novo.php');
	$erro = 1;
}

if ($erro != 1) {

	$senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Criptografar a senha

	$stmt = $conn->prepare("INSERT INTO admins (nome, login, senha) VALUES (?, ?, ?)");
	if ($stmt === false) {
		die("Erro na preparação: " . $conn->error);
	}
	$stmt->bind_param("sss", $nome, $usuario, $senha_hash);

	if ($stmt->execute()) {
		alert('Sucesso ao cadastrar este administrador!', 'panel.php?m=admins&a=listar.php');
	} else {
		alert('Erro ao tentar efetuar esta operação. Tente novamente ou contate o suporte!', 'panel.php?m=admins&a=novo.php');
	}

	$stmt->close();
	$conn->close();
}
?>
