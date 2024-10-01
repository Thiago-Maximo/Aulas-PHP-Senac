<?php
 
include('conexao.php');
$id = $_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

//$update = "UPDATE usuario set nome= $nome,email=$email,senha=$senha WHERE id = $id";

//$retorno = $conexao->query($update);
//header("Location: listar.php");

 // Atualizando dados quando o formulário de edição for submetido
 if (isset($_POST['Alterar']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $update = "UPDATE usuario set nome= $nome,email=$email,senha=$senha WHERE id = $id";
    $retorno = $conexao->query($update);
    echo "<script>
        alert('Usuario Atualizado com SUCESSO!!!');
        window.location.href = 'listar.php'; 
    </script>";
}