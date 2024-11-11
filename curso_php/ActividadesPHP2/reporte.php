<?php

    $notas=[
        "Alvaro"=>0,
        "Ivan"=> 5,
        "Naila"=> 7,
        "Noelia"=> 4,
    ];

    foreach ($notas as $nombre => $nota) {
        if ($nota>=5) {
            echo "Aprobado: ".$nombre ." - ". $nota."<br><br>";
        }
        else{
            echo "Suspenso: ".$nombre ." - ". $nota."<br><br>";
        }
    }
    
        

?>