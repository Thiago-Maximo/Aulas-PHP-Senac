<?php
    // Inicia a sessão
    session_start();

    // Verificação dos campos do formulário
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require 'Banco/conexao2.php';
        require 'Usuario.Class.php';

        $usuario = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']); // addslashes é para prevenção contra injeções de código

        // Verificando se o login é bem-sucedido
        if ($usuario->login($email, $senha) == true) {
            if (isset($_SESSION['id']) && isset($_SESSION['tipo_usuario'])) {
                exit; // O redirecionamento agora ocorre dentro do método login
            } else {
                header("Location: login.php");
                exit; // Garante que o script seja interrompido após o redirecionamento
            }
        } else {
            header("Location: login.php");
            exit; // Garante que o script seja interrompido após o redirecionamento
        }
    } else {
        header("Location: login.php");
        exit; // Garante que o script seja interrompido após o redirecionamento
    }
?>