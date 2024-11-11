<?php
    class nombre{
        public $nombre;

        function __construct($nombre){
            $this->nombre=$nombre;
        }
        
        function mostrarNombre(){
            return $this->nombre;
        }
    }
    class listaNombres{
        public $nombres = [];

        function agregarNombre($nombre){
            $nuevoNombre = new nombre($nombre);
            $this->nombres[] = $nuevoNombre;
        }

        function listarNombres(){
            $resultados = [];
            foreach($this->nombres as $nombre){
                $resultados[] = $nombre->mostrarNombre();
            }
            return $resultados;
        }
    }

    //Ejemplos uso
    $listado = new listaNombres();

    //agreagar nombres
    $listado->agregarNombre("Alvaro");
    $listado->agregarNombre("Antonio");
    $listado->agregarNombre("Ivan");

    echo "Nombres: <br>";

    $nombres = $listado->listarNombres();
    foreach($nombres as $nombre){
        echo "- ",$nombre," ";
    }
?>