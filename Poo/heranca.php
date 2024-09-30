<?php
    class Contas{
        public $saldo = 0;
        public $titular;

        public function sacar($valor){
            $this->saldo -= $valor;
        }

        public function depositar($valor){
            $this->saldo +=$valor;
        }

        public function VerSaldo(){
            return $this->saldo;
        }
    }

    class ContaPupanca extends Contas{
        public $aniversario = 6;

        public function aplicar($valor){
            echo"<hr>Aplicação Efetuada <b> $valor</b><hr>";
            $this->depositar($valor);
        }
    }

    Class ContaPoupancaConjuta extends ContaPoupanca{}
    $conta = new Contas();
    $conta->depositar(1200);

    $contaPoupanca = new ContaPoupanca();
    $contaPoupanca->aplicar(2000);

    $contaPoupancaConjunta = new ContaPoupancaConjunta();

    echo'<pre>';
    var_dump($conta);
    var_dump($contaPoupanca);
    echo'<hr>';
    var_dump($contaPoupancaConjunta);
?>