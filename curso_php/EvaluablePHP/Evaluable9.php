<?php

    class Persona{
        public $nombre;
        public $edad;

        function __construct($nombre, $edad){
            $this->nombre= $nombre;
            $this->edad= $edad;
        }
        function presentacion(){
            echo "Hola, soy $this->nombre y tengo $this->edad años <br>";
        }
    } 

    $Persona=new Persona("Alvaro", 19);
    echo $Persona->presentacion();

    class Coche{
        public $marca;
        public $modelo;
        public $color;

        function __construct($marca, $modelo, $color){
            $this->marca= $marca;
            $this->modelo= $modelo;
            $this->color= $color;
        }

        function mostrarInfo(){
            echo "<br>Marca: $this->marca <br>";
            echo "Modelo: $this->modelo <br>";
            echo "Color: $this->color <br>";      
        }
    }

    $Coche= new Coche("Renault", "Clio", "Negro");
    echo $Coche->mostrarInfo();

    class CuentaBancaria{
        public $titular;
        public $saldo;

        function __construct($titular, $saldo){
            $this->titular=$titular;
            $this->saldo=$saldo;
        }
        function depositar($sumar){
            $this->saldo+=$sumar;
            echo"Le has depositado a $this->titular $sumar € <br>";
        }

        function retirar($restar){
            $this->saldo-=$restar;
            echo "Le has retirado a $this->titular $restar € <br>";
        }
    }

    $cuenta=new CuentaBancaria("Alvaro","50");
    echo $cuenta->depositar(16,);
    echo $cuenta->saldo."<br>";
    echo $cuenta->retirar(16);
    echo $cuenta->saldo."<br>";

    class Libro{
        public $titulo;
        public $autor;
        public $paginas;

        function __construct($titulo, $autor, $paginas){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->paginas=$paginas;
        }

        function resumen(){
            echo "Titulo: $this->titulo <br>";
            echo "Autor: $this->autor <br>";
            echo "Páginas: $this->paginas <br>";
        }
    }

    $libro=new Libro("por las jajas","Alvaro",  17);
    echo $libro->resumen();