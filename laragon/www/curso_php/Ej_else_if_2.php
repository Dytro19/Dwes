<?php

    /* En una fabrica de computadoras se planea ofrecer a los clientes un descuento 
    que dependerá del numero de computadoras que compre. 
    Si las computadoras son menos de 5 se les dará un 10% de descuento sobre el total de la compra; 
    si el numero de computadoras es mayor o igual a cinco pero menos de diez se dle otorga un 20% de descuento; 
    y si son diez o mas se les de un 40% de descuento. El precio de cada computadora es de $700.*/

    $cantidad=7;
    $total=700*$cantidad;

    if ($cantidad < 5) {
        $total*0.9;
        echo "Pagas un total de: ".$total;
    }
    elseif ($cantidad >= 5 && $cantidad < 10) {
        $total*0.8;
        echo "Pagas un total de:".$total;
    }
    elseif ($cantidad >= 10) {
        $total*0.6;
        echo "Pagas un total de:".$total;
    }

?>