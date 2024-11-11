<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>
<body>
    <h1>Inventario</h1>

    <?php
    
        $productos=[];
        function anadir($productos, $nombre, $precio, $Stock){//Funcion para añadir productos
            $productos[]=[
                "nombre"=>$nombre,
                "precio"=>$precio,
                "cantidad"=>$Stock
            ];
            return $productos;
        }
        function listar($productos){//Funcion para mostrar los productos
            if (empty($productos)){
                echo "No hay productos en el inventatio";
            }
            else{
                foreach ($productos as $producto){
                    echo "Nombre - ".$producto["nombre"]."<br> Precio - ".$producto["precio"]."€<br> Cantidad disponible - ".$producto["cantidad"]."<br><br>";
                }
            }
        }
        function buscar($productos, $nombre){
            foreach ($productos as $producto){
                if ($producto["nombre"]==$nombre){
                    echo "Nombre - ".$producto["nombre"]."<br> Precio - ".$producto["precio"]."€<br> Cantidad disponible - ".$producto["cantidad"]."<br><br>";
                    return;
                }
            }
            echo "no encontrado";
            
        }

        $productos=anadir($productos, "Melon", "34", 2024);//añadimos producto
        $productos=anadir($productos, "Sandia", "54", 2025);
        listar($productos);//mostrar los productos
        buscar($productos, "Melon");
        
    
    ?>
</body>
</html>