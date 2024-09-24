<?php
    session_start();
    if ($_POST["Usuario"] != "" and $_POST["Nome"]!= "" and $_POST["Senha"] and $_POST["Saldo"]){
        $_SESSION['usuarios'] = $_SESSION['usuarios']."\n".$_POST["Usuario"];
        $_SESSION['total'] = $_SESSION['total'];
    }
    header("location: Exibir-Usuarios.php");

?>