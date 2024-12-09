<?php

    class producto{
        public $nombre;
        public $precio;
        public $marca;
        public $modelo;
    
        function __construct($nombre, $precio, $marca, $modelo){
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->marca=$marca;
            $this->modelo=$modelo;
        }

        function mostrarDetalles(){
            echo "Nombre: ".$this->nombre."<br>Precio: ".$this->precio."<br>Marca: ".$this->marca."<br>Modelo: ".$this->modelo;
        }

        function aplicarDescuento($porcentaje){
            $this->precio-=($this->precio*$porcentaje/100);
            return $this->precio;
        }
    }

    class Telefono extends producto{
        public $capacidadBateria;

        function __construct($nombre, $precio, $marca, $modelo, $capacidadBateria){
            parent::__construct($nombre, $precio, $marca, $modelo);
            $this->capacidadBateria=$capacidadBateria;
        }

        function mostrarBateria(){
            echo "<br>Bateria: ".$this->capacidadBateria;
        }
    }

    class computadora extends producto{
        public $ram;

        function __construct($nombre, $precio, $marca, $modelo, $ram){
            parent::__construct($nombre, $precio, $marca, $modelo);
            $this->ram=$ram;
        }

        function mostrarRam(){
            echo "<br>Ram: ".$this->ram;
        }
    }

    class televisor extends producto{
        public $tamaño;

        function __construct($nombre, $precio, $marca, $modelo, $tamaño){
            parent::__construct($nombre, $precio, $marca, $modelo);
            $this->tamaño=$tamaño;
        }

        function mostrarTamaño(){
            echo "<br>tamaño: ".$this->tamaño;
        }
    }

    $telefono = new Telefono("iPhone 15", 999, "Apple", "15 Pro", 3500);
    $computadora = new Computadora("MacBook Pro", 2400, "Apple", "M2", 16);
    $televisor = new Televisor("Samsung QLED", 1500, "Samsung", "QN90B", 65);

    $telefono->mostrarDetalles();
    echo "<br>Nuevo precio con descuento: $" . $telefono->aplicarDescuento(10) . ".<br><br>";

    $computadora->mostrarDetalles();
    echo "<br>Nuevo precio con descuento: $" . $computadora->aplicarDescuento(15) . ".<br><br>";

    $televisor->mostrarDetalles();
    echo "<br>Nuevo precio con descuento: $" . $televisor->aplicarDescuento(5) . ".<br><br>";
