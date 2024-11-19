<?php

    class Autor{
        public $nombre;
        public $nacionalidad;

        function __construct($nombre, $nacionalidad){
            $this->nombre=$nombre;
            $this->nacionalidad=$nacionalidad;
        }

        function __tostring(){
            
            return "<br>    Nombre: $this->nombre <br>    Nacionalidad: $this->nacionalidad";
        }

    }

    class Libro{
        public $titulo;
        public $autor;
        public $anioPublicacion;

        function __construct($titulo, $autor, $anioPublicacion){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->anioPublicacion=$anioPublicacion;
        }

        function __tostring(){
            return "<br>Titulo: ".$this->titulo." <br>Autor: ".$this->autor->__tostring()." <br>Año de Publicacion: ".$this->anioPublicacion." <br>";
        }
    }

    class Biblioteca{
        public $libros=[];
        
        function agregarLibro(Libro $libro){
            $this->libros[]=$libro;
        }

        function listarLibros(){
            foreach($this->libros as $libro){
                echo $libro->__tostring();
            }
        }

        function buscarLibros($titulo){
            foreach($this->libros as $libro){
                if($libro->titulo==$titulo){
                    echo "Libro encontrado<br>";
                    $this->$libro->listarLibros();
                    return;
                }  
            }
             echo "No encontrado<br>";
        }
    }

    $autor1=new Autor("Alvaro", "Español");
    $autor2=new Autor("Pepe", "Americano");

    $libro1=new Libro("Por las Jajas", $autor1, 2024);
    $libro2=new Libro("By the Jajas", $autor2, 2023);

    $biblioteca=new Biblioteca();

    $biblioteca->agregarLibro($libro1);
    $biblioteca->agregarLibro($libro2);

    $biblioteca->buscarLibros("Por las Jajas");
