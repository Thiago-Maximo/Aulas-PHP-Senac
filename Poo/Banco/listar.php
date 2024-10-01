<?php
 
include('conexao.php');
 
$query = 'SELECT * FROM usuario';
 
$retorno = $conexao->query($query);
 
$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);
 
foreach ($registros as $registro){
    echo '<br>Id: ' . $registro['id'];
    echo '<br>nome: ' . $registro['nome'];
    echo '<br>email: ' . $registro['email'];
    echo '<br>senha: ' . $registro['senha'];
    echo '<br><a href=atualizar.php><img src="editar.png" width=1.5%/></a>';
    echo '&nbsp&nbsp';
    echo '<br><a href=deletar.php><img src="deletar.png" width=1.5%/></a>';
    echo '<hr width=11% align="left">';
}