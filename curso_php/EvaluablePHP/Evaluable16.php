<?php

    class Cliente{
        public $nombre, $apellido, $direccion, $telefono;

        function __construct($nombre, $apellido, $direccion, $telefono){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->direccion=$direccion;
            $this->telefono=$telefono;
        }
        function mostrarDatos(){
            echo "Nombre: $this->nombre <br>Apellido: $this->apellido <br>Direccion: $this->direccion <br>Telefono: $this->telefono <br><br>";
        }
    }

    class CuentaBancaria{
        public $numeroCuenta, $saldo, $cliente;

        function __construct($numeroCuenta, $saldo, $cliente){
            $this->numeroCuenta=$numeroCuenta;
            $this->saldo=$saldo;
            $this->cliente=$cliente;
        }
        function ingresar($monto){
            if ($monto<0){
                echo "Ingresa una cantidad positiva";
            }
            else{
                $this->saldo+=$monto;
                echo "Saldo actualizado";
            }
        }
        function retirar($monto){
            if ($monto>$this->saldo){
                echo "No tienes suficiente saldo para realizar esta operacion";
            }
            else{
                $this->saldo-=$monto;
                echo "Saldo actualizado";
            }
        }
        function mostrarSaldo(){
            echo "Saldo: $this->saldo";
        }
        function mostrarDatosCuenta(){
            $this->cliente->mostrarDatos();
        }
    }
    
    $cliente1=new Cliente();
    $cuenta1=new CuentaBancaria();

    $cuenta1-> 