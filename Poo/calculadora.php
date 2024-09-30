<?php
    Class Calculadora{
        public $valor1;
        public $valor2;
        public $resultado;

        //Método de Soma
        public function Somar($valor1,$valor2){
            echo"A Soma de $valor1 e $valor2  é: ".$valor1 + $valor2;
            echo"<hr>";
        }

        //Método de Subtração
        public function Subtracao($valor1,$valor2){
           echo"A Subtração de $valor1 e $valor2  é: ".$valor1 - $valor2;
           echo"<hr>";
        }

        //Método de Multiplicação
        public function Multiplicacao($valor1,$valor2){
            echo"A Multiplicação de $valor1 e $valor2  é: ".$valor1 * $valor2;
           echo"<hr>";
        }

        //Método para Divisão
        public function Divisao($valor1,$valor2){
            echo"A Divisão de $valor1 e $valor2  é: ".$valor1 / $valor2;
            echo"<hr>";
        }
    }

    $calculadora = new Calculadora();
    $calculadora->Somar(4,5);
    $calculadora->Subtracao(15,5);
    $calculadora->Multiplicacao(5,5);
    $calculadora->Divisao(50,10);
?>