<?php
   include('conexao.php');



    $query = 'SELECT * FROM produtos LIMIT 2';

    $retorno=$conexao->query($query);

    $registros=$retorno->fetchAll(PDO::FETCH_ASSOC);

    foreach ($registros as $registro){
        echo'Id: '. $registro['id'];
        echo'<br>Filme: '.$registro['filme'];
        echo'<br>Genero: '.$registro['genero'];
        echo'<br>Indicação: '.$registro['indicacao'];
        echo'<hr>';
    }

    echo'<pre>'.print_r($registros,true).'</pre>';
?>