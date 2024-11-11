<?php

    class Producto{
        public $nombre, $cantidad, $precio;

        function agregarStock($stock){
            $this->cantidad+=$stock;
        }
        function __construct($nombre, $cantidad, $precio){
            $this->nombre=$nombre;
            $this->cantidad=$cantidad;
            $this->precio=$precio;
        }
        function eliminarStock($stock){
            if ($stock>$this->cantidad){
                echo "No tienes suficiente cantidad para realizar esta operacion";
            }
            else{
                $this->cantidad-=$stock;
            }
        }
        function mostrarDatos(){
            echo "Nombre: $this->nombre <br>Cantidad: $this->cantidad <br>Precio: $this->precio <br><br>";
        }
    }

    class Inventario{
        public $inventario=[];
        function agregarProducto($producto){
            $this->inventario[$producto->nombre]=$producto;
        }

        function buscar($nombre){
            foreach($this->inventario as $product){
               if($product->nombre==$nombre){
                    $product->mostrarDatos();
               }
               else{
                echo "No encontrado<br>";
               }  
            }
        }

        function mostrarTodo(){
            foreach($this->inventario as $producto){
                echo $producto->mostrarDatos();
            }
        }
    }

$prod1=new Producto("djkaskdasjlkd", 68, 87);
$prod2=new Producto("jaslkdjaslkdsl", 65, 76);

$inventario= new Inventario();
$inventario->agregarProducto($prod1);
$inventario->agregarProducto($prod2);
$inventario->buscar("djkaskdasjlkd");
$inventario->mostrarTodo();
