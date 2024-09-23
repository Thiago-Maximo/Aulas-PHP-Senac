<?php
    $i = 1;
    while($i < 10){
       if($i % 2 == 0){
        echo "$i É um Número Par.\n";
        echo "<br>";
       }
       $i++;
    }

    echo"<br>";

    $x = 1;

    do{
        echo $x;
        echo "<br>";
        $x++;
    } while($x <6);

    echo"<br>";

    $y = 0;
    do{
        $y++;
        if($y == 3)continue;
        echo $y;
        echo "<br>";
    } while($y < 6);

    echo "<br>";

    for ($a = 0; $a <= 10; $a++) {
        echo "O Número é: $a <br>";
    }

    echo"<br>";

    $cores = array("azul", "amarelo", "verde", "vermelho");
        foreach ($cores as $cor) {
        echo "$cor<br>";
    }

    echo"<br>";

    $membros = array("Douglas"=>"40","Jessica"=>"36","Gabriel"=>"17");
    foreach($membros as $nome => $idade){
        echo"$nome : $idade <br>";
    }
?>