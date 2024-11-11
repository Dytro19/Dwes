<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el numero</title>
</head>
<body>
    <h1>Adivina el numero</h1>
    <form action="Evaluable2.php" method="get">
        <label for="numero">Introduce un numero </label><input type="number" name="numero" id="numero"  >

        
        <button type="submit">Comprobar</button>
    </form>

    
    
    <?php
    session_start();//Inicia una sesion en la que no se borran los datos al recargar la página
        
        
        if(!isset($_SESSION["aleatorio"])){//comprueba si el valor en la sesion tiene datos o no, si no tiene datos entra en el if
            $_SESSION["aleatorio"]=random_int(0,100);
            $_SESSION["intentos"]=1;
        }
        $aleatorio=$_SESSION["aleatorio"];//se define la variable con los datos guardados en la sesion    
        $numero=$_GET["numero"];//recoge los datos del formulario
        $intentos=$_SESSION["intentos"];//se define la variable con los datos guardados en la sesion
            
    
            
    
            if($numero==$aleatorio){
                echo "Has acertado el número: $aleatorio <br>";
                echo "Has acertado en $intentos intentos";
                unset($_SESSION["aleatorio"]);//reinicia el valor
                unset($_SESSION["intentos"]);//reinicia el valor
            }
            else if($numero<$aleatorio){
                echo "El numero que buscas es mayor a: $numero <br>";
                $_SESSION["intentos"]++;
                echo "Llevas $intentos intentos";
            }
            else if($numero>$aleatorio){
                echo "El numero que buscas es menor a: $numero <br>";
                $_SESSION["intentos"]++;
                echo "Llevas $intentos intentos";
            }
            

    ?>
</body>
</html>