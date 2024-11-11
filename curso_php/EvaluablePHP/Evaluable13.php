<?php

    class CuentaBanco{
        public $saldo=0;

        function depositar($cantidad){
            if ($cantidad<0){
                echo "Estas depositando, no metas numeros negativos <br>";
            }
            else{
                $this->saldo+=$cantidad;
            }
        }
        function retirar($cantidad){
            if ($this->saldo < $cantidad){
                echo "El saldo no puede ser negativo <br>";
            }
            else{
                $this->saldo-=$cantidad;
            }
        }
        function consultarSaldo(){
            echo $this->saldo."<br>";
        }
    }

    $cuenta= new CuentaBanco();

    $cuenta->depositar(54);
    $cuenta->consultarSaldo();
    $cuenta->retirar(90);
    $cuenta->consultarSaldo();
    $cuenta->depositar(-54);
    $cuenta->consultarSaldo();
