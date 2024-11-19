<?php

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $deportes=$_POST["deportes"];

    echo "Nombre: ".$nombre."<br>";
    echo "Apellido: ".$apellido."<br>";
    echo "Deportes preferidos: ";

    foreach($deportes as $deporte){
        echo $deporte."<br>";
    }
