<?php
    $dia=6;

    if ($dia==1) {
        echo "Hoy es lunes <br><br>";
    }else if ($dia==2) {
        echo "Hoy es martes <br><br>";
    }else if ($dia== 3) {
        echo "Hoy es miercoles <br><br>";
    }else if ($dia== 4) {
        echo "Hoy es jueves <br><br>";
    }else if ($dia== 5) {
        echo "Hoy es viernes <br><br>";
    }else if ($dia== 6) {
        echo "Hoy es sabado <br><br>";
    }else if($dia== 7) {
        echo "Hoy es domingo <br><br>";
    }else {
        echo "Valor no valido <br><br>";
    }

    $cantidad=10;
    $ordenador = 700;
    $total=$ordenador*$cantidad;

    if($cantidad<5) {
        $total=$total*0.9;
    }else if($cantidad>=5 && $cantidad<10) {
        $total=$total*0.8;
    }else if ($cantidad>=10){
        $total=$total*0.6;
    }

    echo "El total es: ",$total,"€<br><br>";

?>