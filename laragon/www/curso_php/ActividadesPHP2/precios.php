<?php

    $precio=[
        "Manzana"=>15,
        "Pera"=> 20,
        "Camiseta"=> 60,
    ];

    $descuento=[
        "Manzana"=>$precio["Manzana"]*0.9,
        "Pera"=>$precio["Pera"]*0.9,
        "Camiseta"=>$precio["Camiseta"]*0.9,
    ];

    echo "El precio original de cada producto es: ";
    foreach ($precio as $clave => $valor){
        echo " <br>".$clave." - ".$valor."€";
    }

    echo "<br><br>";
    echo "El precio con descuento de cada producto es:";
    foreach ($descuento as $clave => $valor){
        echo "<br>".$clave." - ".$valor."€";
    }

?>