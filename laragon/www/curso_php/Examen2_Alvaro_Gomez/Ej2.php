<?php

    class empleado{
        public $nombre;
        public $edad;
        public $salarioBase;

        function __construct($nombre, $edad, $salarioBase){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->salarioBase=$salarioBase;
        }

        function mostrarInfo(){
            echo "<br>Nombre del empleado: ".$this->nombre."<br>Edad del empleado: ".$this->edad."<br>Salario Base del empleado: ".$this->salarioBase;
        }

        function calcularSalario(){
            return $this->salarioBase;
        }

        function getSalarioBase(){
            return $this->salarioBase;
        }
    }

    class empleadoTiempoCompleto extends empleado{
        public $bonoAnual;

        function __construct($nombre, $edad, $salarioBase, $bonoAnual){
            parent::__construct($nombre, $edad, $salarioBase);
            $this->bonoAnual=$bonoAnual;
        }

        function calcularSalario(){
            $total=$this->getSalarioBase()+$this->bonoAnual;
            return $total;
        }

        function mostrarInfo(){
            echo parent::mostrarInfo()."<br>Bono anual: ".$this->bonoAnual;
        }
    }

    class empleadoTiempoParcial extends empleado{
        public $horasTrabajadas;

        function __construct($nombre, $edad, $salarioBase, $horasTrabajadas){
            parent::__construct($nombre, $edad, $salarioBase);
            $this->horasTrabajadas=$horasTrabajadas;
        }

        function calcularSalario(){
            $total=$this->getSalarioBase()*$this->horasTrabajadas/160;
            return $total;
        }

        function mostrarInfo(){
            echo parent::mostrarInfo()."<br>Horas trabajadas: ".$this->horasTrabajadas;
        }
    }

    $empleado1=new empleadoTiempoCompleto("Alvaro", 19, 1200, 200);
    $empleado2=new empleadoTiempoParcial("Pepe", 25, 1200, 120);

    $empleado1->mostrarInfo();

    $empleado2->mostrarInfo();
    $empleado2->calcularSalario();