<?php
 
include('conexao.php');
$nome = "";
$email = "";
$senha = "";
$emailantigo = "";

if (!empty($_GET['email'])) {
    $sql = "DELETE FROM usuarios WHERE email=" . $_POST['emailantigo'];
    $Mysql->query($sql);

    echo "<script>
            alert('Usuario Deletado com SUCESSO!!!');
            window.location.href = 'listar.php'; 
        </script>";
}