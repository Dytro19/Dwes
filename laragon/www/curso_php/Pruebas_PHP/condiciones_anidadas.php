<?php
    $edad=59;
    $genero="hombre";
    //$genero="mujer";

    if($genero=="mujer"){
        if($edad>54){
            echo "Puedes jubilarte";
        }else{
            echo "No puedes jubilarte";
        }
    }elseif($genero=="hombre"){
        if($edad>=60){
            echo "Puedes jubilarte";
        }else{
            echo "No puedes jubilarte";
        }
    }else{
        echo "Genero no valido";
    }
    
?>