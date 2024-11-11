<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario enviado</h1>
    <?php

        /*$nombre=$_POST["nombre"];
       
        $asignatura=$_POST["asignatura"];
        
        $frutas=$_POST["frutas"];
        echo "<br>";
        echo $nombre." - ".$asignatura." - ".$frutas."<br>";*/

        $materias=$_POST["asignatura"];

        foreach($materias as $asignatura){
            echo "".$asignatura."<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";

        $fru=$_POST["frutas"];

        foreach($fru as $frutas){
            echo "".$frutas."<br>";
        }

    ?>
</body>
</html>