<?php

    class biblioteca2{
        public $libros=[];
        function agregarLibro($titulo, $autor){//Funcion para añadir libros
        foreach ($this->libros as $libro){

                if ($libro["titulo"]==$titulo){
                    echo "Este titulo de libro ya existe <br> <br>";
                    return $this->libros;
                }
            }
            $this->libros[]=[
                'titulo'=>$titulo,
                'autor'=>$autor,
            ];
            return $this->libros;
        }
        
        function quitarLibro($titulo){
            $encuentra=false;
            foreach ($this->libros as $nombre => $libro){
                if ($libro["titulo"]==$titulo){
                    unset($this->libros[$nombre]);
                    echo "libro eliminado correctamente <br>";
                    $encuentra=true;
                }
            }
            if ($encuentra==false){
                echo "Libro no encontrado <br>";
            }
        }

        function mostrarLibros(){//Funcion para mostrar los libros
            if (empty($this->libros)){
                echo "No hay libros en la biblioteca";
            }
            else{
                foreach ($this->libros as $libro){
                    echo "Titulo - ".$libro['titulo']."<br>Autor - ".$libro['autor']."<br><br>";
                }
            }
        }
        function buscarLibro($titulo){
            foreach ($this->libros as $libro){
                if (strcasecmp($libro["titulo"], $titulo)==0){
                    echo "Titulo - ".$libro["titulo"]."<br>Autor - ".$libro["autor"]."<br><br>";
                    return;
                }
            }
            echo "no encontrado";
        }
        function contarLibros(){
            $contador=0;
            foreach($this->libros as $libro){
                $contador++;
            }
            echo "El numero total de libros es: ".$contador;
        }
    }
    $biblioteca= new biblioteca2();

    $biblioteca->agregarLibro("Por las Jajas 1", "Alvaro");
    $biblioteca->agregarLibro("Por las Jajas 2", "Alvaro");
    $biblioteca->agregarLibro("Por las Jajas 3", "Alvaro");
    $biblioteca->agregarLibro("Por las Jajas 4", "Alvaro");

    $biblioteca->mostrarLibros();

    $biblioteca->quitarLibro("Por las Jajas 4");

    $biblioteca->mostrarLibros();

    $biblioteca->buscarLibro("Por las Jajas 2");

    $biblioteca->contarLibros();
