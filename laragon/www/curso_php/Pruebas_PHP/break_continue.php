<?php

    $c=1;

    while ($c<= 20) {
        echo $c++."<br>";
        if ($c== 10){
            break;
        }
    }
    
    echo "<br>";

    $pc=["SO","SSD","GPU","RAM","CPU"];
    foreach( $pc as $componente){
        echo $componente."<br>";
        if($componente=="GPU"){
            break;
        }
    }

    echo "<br>";

    $pc=["SO","SSD","GPU","RAM","CPU"];
    foreach( $pc as $componente){
        
        if($componente=="GPU"){
            continue;
        }
        echo $componente."<br>";
    }

    echo "<br>";
    for($i= 0;$i< 10;$i++){
        if($i== 5){
            continue;
        }
        echo $i."<br>";
    }

    echo "<br>";

    $c=1;
    while($c<= 20) {
        if($c== 10){
            $c++;
            continue;
        }
        echo $c."<br>";
        $c++;
    }

?>