<?php
 
include('conexao.php');
 
$query = 'SELECT * FROM usuario';
 
$retorno = $conexao->query($query);
 
$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);
 
foreach ($registros as $registro){
    echo '<br>nome: ' . $registro['nome'];
    echo '<br>email: ' . $registro['email'];
    echo '<br>senha: ' . $registro['senha'];
    echo '<br><a href="atualizar.php?email='.$registro['email'];
    echo '"><img src="img/editar.png" width=2%/></a>';
    echo '&nbsp&nbsp';
    echo '<a href=delete.php?email='.$registro['email'];
    echo '"><img src="img/deletar.png" width=2%/></a>';
    echo '<hr width=11% align="left">';
}