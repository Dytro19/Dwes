<?php

    $portatil=["Acer Nitro 5","Wwindows 11","AMD Ryzen 5 4600H","SSD 256GB","RAM 16GB"];

    $frutas=[
        "Fresas"=>100,
        "Peras"=> 100,
        "Sandias"=> 100,
        "Melocotones"=> 100,
        "Manzanas"=> 100,
    ];

    foreach($portatil as $valor){
        echo $valor."\n";
    }
    
    echo "<br><br>";

    foreach($portatil as $clave=>$valor){
        echo $clave." - ".$valor."<br>";
    }

    echo "<br><br>";

    foreach($frutas as $valor){
        echo $valor."\n";
    }

    echo "<br><br>";

    foreach($frutas as $clave =>$valor){
        echo "Tengo ".$valor." ".$clave."<br>";
    }

    echo "<br><br>";

    $productos=[
        ["codigo"=>"A0001","descripcion"=>"Mouse"],
        ["codigo"=>"A0002","descripcion"=>"Teclado"],
        ["codigo"=>"A0003","descripcion"=>"Monitor"],
        ["codigo"=>"A0004","descripcion"=>"Impresora"],
    ];

    foreach($productos as $clave => $prod){
        echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
    }

?>