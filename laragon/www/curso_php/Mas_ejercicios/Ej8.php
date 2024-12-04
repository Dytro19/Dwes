<?php

    class recurso{
        public $titulo;
        public $autor;
        public $añoPublicacion;

        function __construct($titulo, $autor, $añoPublicacion){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->añoPublicacion=$añoPublicacion;
        }

        function mostrarInfo(){
            echo "Titulo: $this->titulo <br>Autor: $this->autor <br>Año de Publicacion: $this->añoPublicacion <br><br>";
        }
    }

    class libro extends recurso{
        public $numPaginas;

        function __construct($titulo, $autor, $añoPublicacion, $numPaginas){
            parent::__construct($titulo, $autor, $añoPublicacion);
            $this->numPaginas=$numPaginas;
        }

        function mostrarNumPaginas(){
            echo $this->mostrarInfo()."<br>Numero de Páginas: ".$this->numPaginas;
        }
    }

    class Revista extends recurso{
        public $numEdicion;

        function __construct($titulo, $autor, $añoPublicacion, $numEdicion){
            parent::__construct($titulo, $autor, $añoPublicacion);
            $this->numEdicion=$numEdicion;
        }

        function mostrarNumEdicion(){
            echo $this->mostrarInfo()."<br>Numero de edicion: ".$this->numEdicion;
        }
    }

    class dvd extends recurso{
        public $duracion;

        function __construct($titulo, $autor, $añoPublicacion, $duracion){
            parent::__construct($titulo, $autor, $añoPublicacion);
            $this->duracion=$duracion;
        }

        function mostrarDuracion(){
            echo $this->mostrarInfo()."<br>Numero de Páginas: ".$this->duracion;
        }
    }

    $libro = new Libro("El Gran Gatsby", "F. Scott Fitzgerald", 1925, 180);
    $revista = new Revista("National Geographic", "National Geographic Society", 2023, 350);
    $dvd = new DVD("The Matrix", "Lana y Lilly Wachowski", 1999, 136);

    $libro->mostrarInfo();
    $revista->mostrarInfo();
    $dvd->mostrarInfo();
