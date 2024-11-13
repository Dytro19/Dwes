<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tareas</h1>

    <?php
    
        $tareas=[];
        function anadir($tareas, $tarea){//Funcion para añadir tareas
            $tareas[]=$tarea;
            return $tareas;
        }
        function listar($tareas){//Funcion para mostrar las tareas
            if (empty($tareas)){
                echo "No hay tareas";
            }
            else{
                foreach ($tareas as $tarea){
                    echo " - ".$tarea."";
                }
            }
        }

        $tareas=anadir($tareas,"Hacer evaluable3.php");//añadimos tarea
        
        listar($tareas);//mostrar las tareas
    
    ?>
</body>
</html>