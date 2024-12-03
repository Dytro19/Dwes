<?php

    /*Determinar si un alumno aprueba o reprueba un curso, 
    sabiendo que aprobará si su promedio de tres calificaciones es mayor a 7.0; 
    reprueba en caso contrario.*/

    $nota_1= 5;
    $nota_2= 6;
    $nota_3= 7;
    $media=($nota_1+$nota_2+$nota_3)/3;

    if($media>=7){
        echo "Alumno aprobado con nota: "+$media;
    }
    else{
        echo "Alumno suspenso con nota: "+$media;
    }

?>