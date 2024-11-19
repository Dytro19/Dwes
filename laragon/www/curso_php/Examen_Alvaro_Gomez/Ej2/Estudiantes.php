<?php

    $estudiantes=[];

    function agregar($estudiantes, $id, $nombre, $edad, $calificaciones){
        $estudiantes[]=[
            "id"=>$id,
            "nombre"=>$nombre,
            "edad"=>$edad,
            "notas"=>$calificaciones
        ];
        return $estudiantes;
    }
    function eliminar($estudiantes, $id){
        foreach($estudiantes as $numero=>$estudiante){
            if($estudiante["id"]==$id){
                unset($estudiantes[$numero]);
                echo "Estudiante eliminado correctamente<br>";
                return;
            }
        }
        echo "Estudiante no encontrado<br>";
    }

    function buscar($estudiantes, $id){
        foreach($estudiantes as $estudiante){
            if ($estudiante["id"]==$id){
                echo "<br>ID: ".$estudiante["id"]."<br>Nombre: ".$estudiante["nombre"]."<br>Edad: ".$estudiante["edad"]."<br>Calificaciones: ".$estudiante["notas"];
                return;
            }
        }
        return null;
    }

    function promedioNotas($estudiantes, $id){
        $media=0;
        $total=0;
        foreach($estudiantes as $estudiante){
            if($estudiante["id"]==$id){
                $cantidad=count($estudiante["notas"]);
                $total+=$estudiante["notas"];
                $media=$total/$cantidad;
                echo "La media de las notas del estudiante es: ".$media."<br>";
                return $media;        
            }
        }
        return null;
    }
    
    function promedioEdad($estudiantes){
        $media=0;
        $total=0;
        foreach($estudiantes as $estudiante){
            $cantidad=count($estudiantes["edad"]);
            $total+=$estudiante["edad"];
            $media=$total/$cantidad;
            echo "El promedio de la edad de todos los estudiantes es: ".$media."<br>";
            
        }
        return $media;
    }
    function mostrarDatos($estudiantes){
        foreach($estudiantes as $estudiante){
            echo "<br>ID: ".$estudiante["id"].
            "<br>Nombre: ".$estudiante["nombre"].
            "<br>Edad: ".$estudiante["edad"].
            "<br>Calificaciones: ".$estudiante["notas"]."<br>";
        }
    }

    $estudiantes=agregar($estudiantes, 001, "Alvaro", 19, 8);

    $estudiantes=agregar($estudiantes, 002, "Diego", 17, 7);

    $estudiantes=agregar($estudiantes, 003, "Pepe", 18, 6);

    mostrarDatos($estudiantes);
    //promedioNotas($estudiantes, 001);

    $estudiantes=eliminar($estudiantes, 002);

    mostrarDatos($estudiantes);

    promedioEdad($estudiantes);

    buscar($estudiantes, 001);