<?php
    echo "Olá Mundo";
    echo "<br>";
    $x = 10;
    echo $x;
    echo "<br>";
    echo "###############";
?>

<br>

<?php
    echo $x;
    echo "<br>";
    $x = "15";
    var_dump($x);
    echo "<br>";
    var_dump(["Thiago","Maximo",22]);
    echo "<br>";

    $dados = ["Thiago","Maximo",22];
    echo $dados[0];

    echo "<br>";

    $info = array ("Thiago","Maximo",22);
    echo $info[1];

    echo "<br>";

    define ("nome","Thiago Maximo Santos da Silva");
    echo nome;

    echo "<br>";

    const sobrenome = "Maximo";
    echo sobrenome;

    echo "<br>";

    $valor = 50;

    if ($valor < 50) {
        echo "Sim meu Valor é menor que 50!!. O Meu Valor é $valor";
        
    }
    else if($valor > 50){
        echo "Sim Meu Valor é maior que 50!!. Meu Valor é $valor";
    }
    else{
        echo "Sim meu Valor é 50!!";
    }
?>  