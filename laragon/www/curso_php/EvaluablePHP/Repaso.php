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
                unset($productos[$key]);
                echo "Producto eliminado correctamente <br>";
                return $productos;
            }
        }
        echo "Producto no encontrado";
        return $productos;
    }

    function buscar($productos, $id){
        foreach($productos as $key=>$producto){
            if ($producto["id"]==$id){
                echo "Producto Encontrado:<br>".
                    "<br>ID: ".$producto['id'].
                    "<br>Nombre: ".$producto["nombre"].
                    "<br>Cantidad: ".$producto["cantidad"].
                    "<br>Precio: ".$producto["precio"].
                    "<br><br>";
            }
        }
    }

    function listar($productos){
        foreach($productos as $producto){
            echo "ID: ".$producto['id'].
                "<br>Nombre: ".$producto["nombre"].
                "<br>Cantidad: ".$producto["cantidad"].
                "<br>Precio: ".$producto["precio"].
                "<br><br>";
        }
    }

    function calcularTotal($productos){
        $cantidadTotal=0;
        foreach($productos as $producto){
            $cantidadTotal+=$producto["cantidad"];
        }
        echo "La cantidad Total de Productos es: ".$cantidadTotal."<br>";
    }

    function promedio($productos){
        $media=0;
        $total=0;
        $tamaño=count($productos);
        foreach($productos as $producto){
            $total+=$producto["precio"];
        }
        $media=$total/$tamaño;

        echo "La el precio medio de los productos es: ".$media."<br>";
    }

    $productos=agregar($productos, 1, "portatil", 1, 300);
    $productos=agregar($productos, 2, "telefono", 0, 200);
    $productos=agregar($productos, 3, "tablet", 1, 150);
    
    listar($productos);

    $productos=eliminar($productos, 2);

    listar($productos);

    buscar($productos, 3);

    calcularTotal($productos);

    promedio($productos);

