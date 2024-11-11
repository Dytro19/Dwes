<?php

    $texto="El Salvador";

    $variable_1=$texto; //Copiar directamente

    $variable_2=&$texto; //El valor que tenga la variable texto

    echo $variable_1;

    $texto="Antonio";

    echo $variable_2;

?>