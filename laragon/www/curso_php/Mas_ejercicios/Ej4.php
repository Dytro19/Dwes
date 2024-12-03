<?php

    class vehiculo{
        public $marca;
        public $modelo;
        public $año;
        public $kilometraje;

        function __construct($marca, $modelo, $año, $kilometraje){
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->año=$año;
            $this->kilometraje=$kilometraje;
        }

        function mostrarDetalles(){
            echo "Marca: $this->marca <br>Modelo: $this->modelo <br>Año: $this->año <br>Kilometraje: $this->kilometraje <br>";
        }
    }

    class coche extends vehiculo{
        public $puertas;

        function __construct($marca, $modelo, $año, $kilometraje, $puertas){
            parent::__construct($marca, $modelo, $año, $kilometraje);
            $this->puertas=$puertas;
        }

        function mostrarDetalles(){
            parent::mostrarDetalles();
            echo "Puertas: $this->puertas <br><br>";
        }
    }

    class moto extends vehiculo{
        public $cilindrada;

        function __construct($marca, $modelo, $año, $kilometraje, $cilindrada){
            parent::__construct($marca, $modelo, $año, $kilometraje);
            $this->cilindrada=$cilindrada;
        }

        function mostrarDetalles(){
            parent::mostrarDetalles();
            echo "Cilindrada: $this->cilindrada <br><br>";
        }
    }

    $coche1=new coche("Toyota", "Corolla", 2020, 15000, 4);
    $coche1->mostrarDetalles();

    $moto1=new moto("Honda", "CBR500", 2022, 5000, 500);
    $moto1->mostrarDetalles();