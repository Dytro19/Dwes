<?php

    class Libro{
        public $titulo;
        public $autor;
        public $precio;

        function __construct($titulo, $autor, $precio){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->precio=$precio;
        }
        
        function getTitulo(){
            return $this->titulo;
        }
        function getAutor(){
            return $this->autor;
        }
        function getPrecio(){
            return $this->precio;
        }
    }

    class Cliente{
        public $nombre;
        public $correo;
        public $saldo;

        function __construct($nombre, $correo, $saldo){
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->saldo=$saldo;
        }

        function getNombre(){
            return $this->nombre;
        }
        function getCorreo(){
            return $this->correo;
        }
        function getSaldo(){
            return $this->saldo;
        }

        function retirarSaldo($saldo){
            if ($this->saldo>=$saldo){
                $this->saldo-=$saldo;
                echo "Saldo actualizado <br>";
            }else{
                echo "No dispones del saldo necesario para realizar esta operacion <br>";
            }
        }
    }

    class Carrito{
        public $libros=[];

        function agregarLibro(Libro $libro){
            $this->libros[]=$libro;
        }

        function calcularTotal() { 
            $total = 0; 
            foreach ($this->libros as $libro) { 
                $total += $libro->precio; 
            } 
            return $total;
        }

        function mostrarLibros() {
            echo "Libros: ";
            foreach($this->libros as $libro){
                echo "<br>Titulo: ".$libro->titulo."<br>Autor: ".$libro->autor."<br>Precio: ".$libro->precio."€<br>";
            }
        }
    }

    class Venta{
        function realizarVenta(Cliente $cliente, Carrito $carrito){
            if ($cliente->saldo>=$carrito->calcularTotal()){
                $cliente->retirarSaldo($carrito->calcularTotal());
                echo "El total a pagar es: ".$carrito->calcularTotal()."<br>";
                echo "Saldo restante: ".$cliente->saldo."<br>";
            }
        }
    }

    $libro1=new Libro("Por las Jajas", "Alvaro", 40);
    $libro2=new Libro("Por las jajas 2","Alvaro", 50);

    $cliente1=new Cliente("Alvaro", "dsajlkifjklsd@example.com", 500);

    $carrito=new Carrito;
    $carrito->agregarLibro($libro1);
    $carrito->agregarLibro($libro2);
    $carrito->mostrarLibros();

    $venta=new Venta;
    $venta->realizarVenta($cliente1, $carrito);


