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

    
?>