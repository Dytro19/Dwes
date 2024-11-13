<?php

    $libros=[];
    function anadir($libros, $titulo, $autor, $stock, $id){//Funcion para añadir libros
       foreach ($libros as $libro){

            if ($libro["id"]==$id){
                echo "Este id de libro ya existe <br> <br>";
                return $libros;
            }
        }
        $libros[]=[
            'titulo'=>$titulo,
            'autor'=>$autor,
            'id'=>$id,
            'stock'=>$stock
        ];
        return $libros;
    }

    function listar($libros){//Funcion para mostrar los libros
        if (empty($libros)){
            echo "No hay libros en la biblioteca";
        }
        else{
            foreach ($libros as $libro){
                echo "Titulo - ".$libro['titulo']."<br>Autor - ".$libro['autor']."<br>ID - ".$libro['id']."<br> Cantidad Disponible - ".$libro['stock']."<br><br>";
            }
        }
    }

    function buscar($libros, $titulo){
        foreach ($libros as $libro){
            if (strcasecmp($libro["titulo"], $titulo)==0){
                echo "Titulo - ".$libro["titulo"]."<br>Autor - ".$libro["autor"]."<br>ID - ".$libro["id"]."<br> Cantidad Disponible - ".$libro["stock"]."<br><br>";
                return;
            }
        }
        echo "no encontrado";
    }

    function actualizar($libros, $stock, $id){
        foreach ($libros as $clave=>$libro){
            if ($libro["id"]==$id){
                $libros[$clave]["stock"]=$stock;
                return;
            }
        }
        return $libros;
    }

    $libros=anadir($libros,"Por las Jajas","Alvaro", 17, 1);
    $libros=anadir($libros,"Por las Jajas2","Alvaro", 3, 2);

    listar($libros);
    
    buscar($libros, "Por las Jajas2");

    $libros=actualizar($libros, 33, 2);

    listar($libros);
