<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultado de la suma</h2>
    <?php
    
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        $resultado=$num1+$num2;

        echo "El resultado de la suma es: $resultado";
    
    ?>
    
</body>
</html>