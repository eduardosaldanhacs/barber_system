<?php

    header("Content-Type: text/html; charset=ISO-8859-1", true);
    session_name('barber_system');
    session_start();

    require_once('includes/connect.php');
    require_once('includes/functions.php');

    $erro = false;
    $mensagem = "";

    if (empty($_POST['login'])) {
        $mensagem = "Preencha corretamente o campo Usuário!!";
        $erro = true;
    }

    if (empty($_POST['senha'])) {
        $mensagem .= "\nPreencha corretamente o campo Senha!!";
        $erro = true;     
    }

    if ($erro) {
?>
        <script>
            alert('<?= $mensagem ?>');
        </script>
<?php
        $_SESSION = array();
        session_destroy();
        redir('index.php');

    } else {

        $login = mysqli_real_escape_string($conn, $_POST['login']);
        $senha = $_POST['senha'];  // não precisa escapar, pois não vai mais pro SQL.

        $query_login = "SELECT * FROM admins WHERE login = '$login' LIMIT 1";
        $mysql_query = mysqli_query($conn, $query_login);

        if (mysqli_num_rows($mysql_query) < 1) {
?>
            <script>
                alert('Usuário ou senha inválidos!! Tente novamente!');
            </script>
<?php
            $_SESSION = array();
            session_destroy();
            redir('index.php');

        } else {

            $dados = mysqli_fetch_assoc($mysql_query);

            if (password_verify($senha, $dados['senha'])) {

                mysqli_query($conn, "UPDATE admins SET ultimo_login = '".date("Y-m-d H:i:s")."' WHERE id = '{$dados['id']}'");

                $_SESSION['ID_ADMIN']         = $dados['id'];
                $_SESSION['ADMINISTRADOR']    = $dados['login'];
                $_SESSION['NOME']             = $dados['nome'];
                $_SESSION['IS_LOGADO']        = true;                

                redir('panel.php');

            } else {
?>
                <script>
                    alert('Usuário ou senha inválidos!! Tente novamente!');
                </script>
<?php
                $_SESSION = array();
                session_destroy();
                redir('index.php');
            }
        }
    }

?>
