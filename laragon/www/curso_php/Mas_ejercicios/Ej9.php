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
            return $precioTotal=$this->precio*($porcentaje/100);
        }
    }

    class Telefono extends producto{
        public $capacidadBateria;

        function __construct($nombre, $precio, $marca, $modelo, $capacidadBateria){
            parent::__construct($nombre, $precio, $marca, $modelo);
            $this->capacidadBateria=$capacidadBateria;
        }
    }