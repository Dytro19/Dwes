<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    
        $figuras=$_POST["figura"];

        $area=0;
        
        switch( $figuras ) {
            case "Circulo":
                $radio=$_POST["radio"];
                $area= pi()*($radio*$radio);
                break;
            case "Triangulo":
                $altura=$_POST["altura"];
                $base=$_POST["base"];
                $area= $base*$altura/2;
                break;
            case "Cuadrado":
                $lado=$_POST["lado"];
                $area= $lado*$lado;
                break;
        }
        echo "El area de $figuras es: $area";
    
    ?>
</body>
</html>