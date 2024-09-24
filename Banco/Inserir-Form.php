<?php
include("conexao.php");
 
if (isset($_POST["Usuario"], $_POST["Nome"], $_POST["Senha"], $_POST["Saldo"])) {
 
    // Sanitizando as entradas para evitar SQL Injection
    $Usuario = ( $_POST["Usuario"]);
    $Nome = ( $_POST["Nome"]);
    $Senha = ($_POST["Senha"]);
    $Saldo = ( $_POST["Saldo"]);
 
    $sql = "INSERT INTO contas (Usuario, Nome, Senha, Saldo) VALUES ('$Usuario', '$Nome', '$Senha', '$Saldo')";
 
    $res = mysqli_query($Mysql, $sql);
    
    if ($res) {
        echo "Registro gravado com sucesso!";
        header("Location: Exibir-Usuarios.php");
    } else {
        echo "Falha ao gravar registro: " . mysqli_error($Mysql);
    }
 
    mysqli_close($Mysql);
} else {
    echo "Por favor, preencha todos os campos!";
}
?>