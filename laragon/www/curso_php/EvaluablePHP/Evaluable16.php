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
            echo "Nombre: $this->nombre <br>Apellido: $this->apellido <br>Direccion: $this->direccion <br>Telefono: $this->telefono <br>";
        }
    }

    class CuentaBancaria{
        public $numeroCuenta, $saldo;
        

        function __construct($numeroCuenta, $saldo){
            $this->numeroCuenta=$numeroCuenta;
            $this->saldo=$saldo;
        }
        function ingresar($monto){
            if ($monto<0){
                echo "Ingresa una cantidad positiva<br>";
            }
            else{
                $this->saldo+=$monto;
                echo "Saldo actualizado<br>";
            }
        }
        function retirar($monto){
            if ($monto>$this->saldo){
                echo "No tienes suficiente saldo para realizar esta operacion<br>";
            }
            else{
                $this->saldo-=$monto;
                echo "Saldo actualizado<br>";
            }
        }
        function mostrarSaldo(){
            echo "Saldo: $this->saldo";
        }
        function mostrarDatosCuenta($cliente){
            $cliente->mostrarDatos();
            echo "Saldo: $this->saldo <br>Numero de Cuenta: $this->numeroCuenta <br><br>";
        }
    }
    
    $cliente1=new Cliente("Alvaro", "Gomez", "kjldsakljasjkld", "398128356");
    $cuenta1=new CuentaBancaria("2341978023419780", 50);
    $cuenta1->mostrarDatosCuenta($cliente1);
    $cliente2=new Cliente("Ivan","XD", "ñasdkfljnnsdaflkñj", "413279807");
    $cuenta2=new CuentaBancaria("4321708914237980",80);
    $cuenta2->mostrarDatosCuenta( $cliente2);

    $cuenta1->ingresar(20);
    $cuenta2->ingresar(70);

    $cuenta1->mostrarDatosCuenta( $cliente1);
    $cuenta2->mostrarDatosCuenta( $cliente2);

    $cuenta1->retirar(9000);
    $cuenta2->retirar(70);

    $cuenta1->mostrarDatosCuenta( $cliente1);
    $cuenta2->mostrarDatosCuenta( $cliente2);
