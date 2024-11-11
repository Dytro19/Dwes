<?php

    /*Calcular el total que una persona debe pagar en una llantera, 
    el precio de cada llanta es de $800 si se compran menos de 5 llantas 
    y de $700 si se compran 5 o mas*/

    $num_llantas=5;

    if($num_llantas>= 5){
        echo "Cada llanta son 700$, tu pagas un total de: "+($num_llantas*700)+"$";
    }else{
        echo "Cada llanta son 800$, tu pagas un total de: "+($num_llantas*800)+"$";
    }

?>