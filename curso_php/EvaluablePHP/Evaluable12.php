<?php

    class empleado{
        public $nombre;
        public $salario;

        function setNombre($nombre){
            $this->nombre=$nombre;
        }
        function setSalario($salario){
            $this->salario=$salario;
        }
        function mostrarInfo(){
            echo "Nombre: ".$this->nombre.", Salario: ".$this->salario."";
        }
    }

    $empleado = new empleado();
    $empleado->setNombre("Alvaro");
    $empleado->setSalario("300000");
    $empleado->mostrarInfo();