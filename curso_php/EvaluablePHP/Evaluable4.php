<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de contactos</title>
</head>
<body>
    <h1>Gestion de contactos</h1>

    <?php
    
        $contactos=[];

        function anadir($contactos, $nombre, $telefono){
            $id=count($contactos)+1;
            $contactos[]=[
                "nombre"=> $nombre,
                "telefono"=> $telefono,
                "id"=> $id
            ];
            return $contactos;
        }
        function listar($contactos){
            if (empty($contactos)){
                echo "No hay contactos";
            }
            else{
                foreach ($contactos as $contacto){
                echo "Numero - ".$contacto["id"]."<br>Nombre - ".$contacto["nombre"]."<br>Telefono - ".$contacto["telefono"]."<br><br>";
                }
            }
        }
        function eliminar($contactos, $id){
            foreach ($contactos as $numero => $contacto){
                if ($contacto["id"]==$id){
                    unset($contactos[$numero]);
                    echo "Contacto eliminado correctamente <br>";
                }
            }
            $contactos = array_values($contactos);
            foreach ($contactos as $num => $contacto){
                $contactos[$num][$id]==$id=$num+1;
            }
            return $contactos;
        }

        $contactos=anadir($contactos, "Antonio", "953186439");
        $contactos=anadir($contactos, "Alvaro", "653791534");
        listar($contactos);
        $contactos=eliminar($contactos, 1);
        listar($contactos);
        $contactos=eliminar($contactos,1);
        listar($contactos);
        
    ?>

</body>
</html>