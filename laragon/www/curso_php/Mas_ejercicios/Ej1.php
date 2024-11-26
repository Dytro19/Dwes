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
    }