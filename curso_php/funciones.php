<?php

    function saludo($nombre){
        return "Hola, mi nombre es: $nombre";
    }

    //$saludo=saludo()

    echo saludo("Antonio");
    //echo $saludo;

    echo "<br>";

    $usuario="Carlos";

    echo saludo($usuario);

    //

    function promedio($nota_1, $nota_2, $nota_3){
        return ($nota_1+$nota_2+$nota_3)/3;
    }

    $promedio
?>