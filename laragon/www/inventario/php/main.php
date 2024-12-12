<?php

    //conexion a la base de datos
    function conexion(){
        $pdo = new PDO("mysql:host=localhost;dbname=inventario","root","");
        return $pdo;
    }

    function verificar_datos($filtro, $cadena){
        if(preg_match("/^".$filtro."$/",$cadena)){
            return false;
        }else{
            return true;
        }
    }

    $nombre="Alvaro7";

    if (verificar_datos("[a-zA-Z]{6,10}", $nombre)){
        echo "los datos no coinciden";
    }