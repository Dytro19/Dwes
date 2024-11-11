<?php

    /* Hacer un programa que calcule el total a pagar por la compra de camisas. 
    Si se compran tres camisas o mas se aplica un descuento del 20% sobre el total de la compra y 
    si son menos de tres camisas un descuento del 10% */

    $total=50;
    $cantidad=3;

    ($cantidad>=3)?$precio_final=$total*0.8:$precio_final=$total*0.9;

    echo "El total a pagar es: ".$precio_final;

?>