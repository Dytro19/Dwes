<?php

    //array de tipo escaclar
    $estudiantes=array("Antonio","Lucia","Jose","Vanesa",7);

    //echo $estudiantes[3];

    $estudiantes[3] = "Claudia";

    //echo $estudiantes[3];


    //Array de tipo asociativo
    $tutor=[
        "nombre"=>"Antonio",
        "apellido"=> "Gomez",
        "edad"=> 50,
        
    ];
    //echo $tutor["edad"];

    $tutor['edad']=45;

    //echo $tutor['edad'];

    //Array de tipo multidimensional
    $tutor_2=[
        'nombre'=> 'Antonio',
        'apellido'=> 'Gomez',
        'edad'=> 50,
        'cursos'=>["PHP", "PYTHON", "CSS"]
        ];
    echo $tutor_2["cursos"][1];

    echo "<br><br>";

    $tutor_2["cursos"][2]= "JavaScript";

    $tutor_2['pais']="España";

    echo $tutor_2["pais"];
    echo "<br><br>";
    
    echo count($tutor);
    echo "<br><br>";

    echo count ($tutor_2, COUNT_RECURSIVE);
?>