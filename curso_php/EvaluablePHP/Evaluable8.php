<?php

    $productos=[];
    function anadir($productos, $nombre, $stock, $precio){
        $productos[]=[
            "nombre"=>$nombre,
            "stock"=>$stock,
            "precio"=>$precio
        ];
        echo "producto añadido <br>";
        return $productos;
    }

    function actualizar($productos, $nombre, $stock){
        foreach ($productos as $clave=>$producto){
            if ($producto['nombre']==$nombre){
                $productos[$clave]['stock']=$stock;
                echo "cantidad actualizada <br>";
                return $productos;
            }
            
        }
        echo "producto no encontrado <br>";
        return $productos;
    }

    function eliminar($productos, $nombre){
        foreach ($productos as $clave=>$producto){
            if ($producto["nombre"]==$nombre){
                unset($productos[$clave]);
                echo "Producto eliminado <br>";
                return $productos;
            }
        }
        echo "producto no encontrado <br>";
        return $productos;
    }

    function calcularTotal($productos){
        $total=0;
        foreach ($productos as $producto){
            $total+=$producto["stock"]*$producto["precio"];
        }
        echo "El total es: ".$total."€";
        return $total;
    } 

    $productos=anadir($productos,"ps4", 7, 499);
    $productos=anadir($productos,"pc", 7, 78);
    $productos=anadir($productos,"hola", 7, 56);
    $productos=anadir($productos,"revista", 7, 99);
    $productos=anadir($productos,"melon", 7, 49);

    $productos=actualizar($productos, "ps4", 59);

    $productos=eliminar($productos, "hola");
    calcularTotal($productos);

