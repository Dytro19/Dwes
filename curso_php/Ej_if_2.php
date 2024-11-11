<?php

    /*En un almacen se hace un 20% de descuento a los clientes cuya compra supere los $100.
    ¿Cual será la cantidad que pagará una persona por su compra?*/

    $compra=105;
    
    if ($compra>=100){
        $descuento=$compra*0.8;
        echo "La compra te cuesta: "+$descuento;
    }
    else{
        echo "No te hacemos descuento y pagas: "+$compra;
    }

?>