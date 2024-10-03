<?php
 
include('conexao.php');
$id = $_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$emailantigo = $_POST['emailantigo'];

$update = "UPDATE usuario SET
    nome = '$nome',
    email = '$email',
    senha = '$senha';
    WHERE email = '$emailantigo'";

$retorno = $conexao->exec($update);

header("Location: listar.php");