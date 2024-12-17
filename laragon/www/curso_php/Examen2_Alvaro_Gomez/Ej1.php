<?php

    class producto{
        public $nombre;
        public $precio;

        function __construct($nombre, $precio){
            $this->nombre=$nombre;
            $this->precio=$precio;
        }

        function mostrarInfo(){
            echo "<br>Nombre del producto: ".$this->nombre."<br>Precio del producto: ".$this->precio;
        }

        function aplicarDescuento($porcentaje){
            $total=$this->precio-($porcentaje/10);
            return $total;
        }

        function getPrecio(){
            return $this->precio;
        }

        function getNombre(){
            return $this->nombre;
        }
    }

    class pedido{
        public $productos=[];
        public $fecha;

        function __construct($fecha){
            $this->fecha=$fecha;
        }

        function agregarProducto(producto $producto){
            $this->productos[]=$producto;
        }

        function mostrarDetallePedido(){
            foreach($this->productos as $producto){
                echo $producto->mostrarInfo()."<br>Fecha de pedido: ".$this->fecha;
            }
        }

        function calcularTotal(){
            $total=0;
            foreach ($this->productos as $producto){
                $total+=$producto->getPrecio();
            }
            return $total;
        }
    }

    class cliente{
        public $nombre;
        public $email;
        public $pedidos=[];

        function __construct($nombre, $email){
            $this->nombre=$nombre;
            $this->email=$email;
        }

        function realizarPedido(pedido $pedido){
            $this->pedidos[]=$pedido;
        }

        function mostrarPedidos(){
            foreach($this->pedidos as $pedido){
                echo "<br>Cliente: ".$this->nombre."<br>Email del cliente: ".$this->email.$pedido->mostrarDetallePedido();
            }
        }

        function getPedidos(){
            foreach($this->pedidos as $pedido){
                return $pedido;
            }
        }

        function getNombre(){
            return $this->nombre;
        }
    }

    class tienda{
        public $nombre;
        public $clientes=[];

        function __construct($nombre){
            $this->nombre=$nombre;
        }

        function agregarCliente(cliente $cliente){
            $this->clientes[]=$cliente;
        }

        function mostrarClientes(){
            echo "Clientes: ";
            foreach($this->clientes as $cliente){
                echo $cliente->getNombre();
            }
        }

        function mostrarPedidosDeTodosLosClientes(){
            foreach($this->clientes as $cliente){
                echo $cliente->mostrarPedidos()."<br>";
            }
        }
    }

    $producto1=new producto("PS4", 500);
    $producto2=new producto("PC", 700);
    $producto3=new producto("Portatil", 600);

    $producto1->aplicarDescuento(5);
    $producto2->aplicarDescuento(5);
    $producto3->aplicarDescuento(5);

    $pedido1=new pedido("22/11/2024");
    $pedido2=new pedido("22/11/2024");

    $pedido1->agregarProducto($producto3);
    $pedido2->agregarProducto($producto2);

    $cliente1=new cliente("Alvaro", "ejemplo@ejemplo.com");
    $cliente2=new cliente("Pepe", "ejemplo2@ejemplo.com");

    $cliente1->realizarPedido($pedido1);
    $cliente2->realizarPedido($pedido2);

    $tienda1=new tienda("e-Shop");

    $tienda1->agregarCliente($cliente1);
    $tienda1->agregarCliente($cliente2);

    $tienda1->mostrarPedidosDeTodosLosClientes();