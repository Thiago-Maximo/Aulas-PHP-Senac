<?php 
    include("conexao.php");
 

    $id = '';
    $nome = '';
    $usuario = '';
    $senha = '';
    $saldo = '';
 
    
    if (!empty($_POST['id']) && isset($_POST['Deletar'])) {
        $sql = "DELETE FROM produtos WHERE id=" . $_POST['id'];
        $Mysql->query($sql);

        echo "<script>
                alert('Filme Deletado com SUCESSO!!!');
                window.location.href = 'index.php'; 
            </script>";
    }
?>