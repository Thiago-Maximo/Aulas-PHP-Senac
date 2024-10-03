<?php
include("conexao.php");
include("topo.php");
session_start();
 
// Verifica se o usuário está logado
if (empty($_SESSION['usuario_tipo'])) {
    echo "<script>
        alert('Você não tem autorização para acessar esta página, por favor, efetue o login.');
        window.location.href = 'FormLogin.php';
    </script>";
    exit();
} else {
    echo "<script>
        window.location.href = 'ver_agendamentos-cliente.php';
    </script>";
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Teste Mané</title>
</head>
<body>
    
</body>
</html>