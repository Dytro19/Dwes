<?php

    $diario=[90, 70, 80, 50, 70, 90];
    $totalVentas=0;
    $numeroDias= count($diario);

    for($i= 0;$i< $numeroDias;$i++){
        $totalVentas+=$diario[ $i ];
    }
    
    $promedio=$totalVentas/$numeroDias;

    echo "El total de ventas es: $totalVentas";
    echo "<br>";
    echo "El promedio de ventas es: ".round($promedio);

?>