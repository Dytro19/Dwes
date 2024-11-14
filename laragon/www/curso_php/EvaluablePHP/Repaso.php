<?php


    $productos=[];
    function agregar($productos, $id, $nombre, $cantidad, $precio){
        $productos[]=[
            "id"=>$id,
            "nombre"=>$nombre,
            "cantidad"=>$cantidad,
            "precio"=>$precio
        ];
        return $productos;
    }
    function eliminar($productos, $id){
        foreach($productos as $key=>$producto){
            if ($producto["id"]==$id){
                unset($producto[$key]);
                echo "Producto eliminado correctamente";
                return $producto;
            }
        }
        echo "Producto no encontrado";
    }

    function buscar($productos, $id){
        foreach($productos as $key=>$producto){
            if ($producto["id"]==$id){
                echo "Producto Encontrado:<br>".
                    "ID: ".$producto['id'].
                    "Nombre: ".$producto["nombre"].
                    "Cantidad: ".$producto["cantidad"].
                    "Precio: ".$producto["precio"];
                return $producto;
            }
        }
    }

    function listar($productos){
        foreach($productos as $producto){
            echo "ID: ".$producto['id'].
                "<br>Nombre: ".$producto["nombre"].
                "<br>Cantidad: ".$producto["cantidad"].
                "<br>Precio: ".$producto["precio"];
        }
        echo "<br>";
    }

    function calcularTotal($productos){
        $total=0;
        foreach($productos as $producto){
            $total+=$producto["cantidad"];
        }
        echo "La cantidad Total de Productos es: ".$total;
    }

    function promedio($productos){
        $media=0;
        foreach($productos as $producto){
            $total+=$producto["precio"]*$producto["cantidad"];
        }
        $media=$total/count($productos[]);

        echo "La el precio medio de los productos es: ".$media;
    }

    agregar($productos, 1, "portatil", 4, 300);
    agregar($productos, 2, "telefono", 4, 200);
    agregar($productos, 3, "tablet", 4, 150);
    
    listar($productos);

    eliminar($productos, 2);

    listar($productos);

    buscar($productos, 3);

    calcularTotal($productos);

    promedio($productos);
