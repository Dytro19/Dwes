<?php

    $pesoVehiculo=1500; $pesoPermitido = 3500;

    if ($pesoVehiculo>$pesoPermitido){
        echo "No puedes pasar, el peso máximo es: $pesoPermitido";
    }
    elseif ($pesoVehiculo<$pesoPermitido){
        echo "Puedes pasar";
    }
    else{
        echo "Pasas por los pelos";
    }

?>