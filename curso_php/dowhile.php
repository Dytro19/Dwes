<?php
    $contador=1;

    do{
        echo $contador. "\n";
        $contador++;
    
    }while($contador<="20");

    echo "<br>";

    do{
        $contador--;
        echo $contador. "\n";
        
    }while($contador>"1");
    
    echo "<br><br>";

    $numero="2";
    $contador="1";
    
    do{
        echo $numero," X ",$contador," = ",$numero*$contador. "<br>";
        $contador++;
    
    }while($contador<="12");

    echo "<br>";

    do{
        $contador--;
        echo $numero," X ",$contador," = ",$numero*$contador. "<br>";
    
    }while($contador>"1");
        
?>