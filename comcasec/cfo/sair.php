<?php
    session_start();   
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha'],
		$_SESSION['loggedin']
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//$conn->close();
	mysqli_close($conn);
    //redirecionar o usuario para a página de login
    header("Location: /comcasec/index.php");
?>