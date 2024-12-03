<?php

    $numero=null;
    //$numero;
    //$numero=0;

    if (is_null($numero)){
        echo "la variable es nula";
    }else{
        echo "La variable no es nula";
    }

    echo "<br>";

    if(empty($numero)){
        echo "La variable está vacia";
    }else{
        echo "La variable no está vacia";
    }

    echo "<br>";

    if(isset($numero)){
        echo "La variable está definida";
    }else{
        echo "La variable no está definida";
    }

    echo "<br>";


?>