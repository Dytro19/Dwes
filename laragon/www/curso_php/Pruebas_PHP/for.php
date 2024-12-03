<?php
    for ($contador = 1; $contador <= 20; $contador++) {
        echo $contador. "\n";
    }

    echo "<br>";

    for ($contador = 20; $contador >= 1; $contador--) {
        echo $contador. "\n";
    }
    
    echo "<br><br>";

    $numero="2";

    for ($contador = 1; $contador <= 12; $contador++) {
        echo $numero," X ",$contador," = ",$numero*$contador. "<br>";
    }

    echo "<br>";

    for ($contador = 12; $contador >= 1; $contador--) {
        echo $numero," X ",$contador," = ",$numero*$contador. "<br>";
    }
        
?>