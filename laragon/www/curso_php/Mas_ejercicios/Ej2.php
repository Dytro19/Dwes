<?php

    class Producto {
        public $nombre;
        public $precio;
        public $cantidad;

        function __construct($nombre, $precio, $cantidad) {
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->cantidad=$cantidad;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getPrecio() {
            return $this->precio;
        }

        function getCantidad() {
            return $this->cantidad;
        }

        function reducirCantidad($cantidad) {
            if ($this->cantidad>=$cantidad) {
                $this->cantidad-=$cantidad;
                return true;
            }
            return false;
        }
    }

    class Cliente {
        public $nombre;
        public $correo;
        public $saldo;
    
        function __construct($nombre, $correo, $saldo) {
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->saldo=$saldo;
        }
    
        function getNombre() {
            return $this->nombre;
        }
    
        function getCorreo() {
            return $this->correo;
        }
    
        function getSaldo() {
            return $this->saldo;
        }
    
        function restarSaldo($monto) {
            if ($this->saldo>=$monto) {
                $this->saldo-=$monto;
                return true;
            }
            return false;
        }
    }

    class CarritoCompra {
        public $productos = [];
    
        function agregarProducto($producto, $cantidad) {
            if ($producto->reducirCantidad($cantidad)) {
                if (isset($this->productos[$producto->getNombre()])) {
                    $this->productos[$producto->getNombre()]['cantidad']+=$cantidad;
                } else {
                    $this->productos[$producto->getNombre()] = [
                        'producto'=>$producto,
                        'cantidad'=>$cantidad
                    ];
                }
                return true;
            }
            return false;
        }
    
        function calcularTotal() {
            $total=0;
            foreach ($this->productos as $item) {
                $total+=$item['producto']->getPrecio() * $item['cantidad'];
            }
            return $total;
        }
    
        function mostrarProductos() {
            echo "Productos en el carrito:<br>";
            foreach ($this->productos as $item) {
                echo "- ".$item['producto']->getNombre()." x".$item['cantidad']." - Precio unitario: ".$item['producto']->getPrecio()."€<br>";
            }
        }
    }

    class Factura {
        function generarFactura($cliente, $carrito) {
            $total = $carrito->calcularTotal();
            echo "Factura de Compra<br>";
            echo "Cliente: ".$cliente->getNombre()."<br>";
            echo "Correo: ".$cliente->getCorreo()."<br><br>";
    
            $carrito->mostrarProductos();
            echo "<br>Total a pagar: ".$total."€<br>";
    
            if ($cliente->restarSaldo($total)) {
                echo "Pago realizado. Nuevo saldo: ".$cliente->getSaldo()."€<br>";
            } else {
                echo "Saldo insuficiente para realizar la compra.<br>";
            }
        }
    }

    $producto1 = new Producto("Lavadora", 300, 10);
    $producto2 = new Producto("Televisor 4K", 500, 5);
    $producto3 = new Producto("Microondas", 150, 8);

    $cliente1 = new Cliente("Luis González", "luisgonzalez@example.com", 2000);

    $carrito = new CarritoCompra();
    $carrito->agregarProducto($producto1, 2);
    $carrito->agregarProducto($producto2, 1);
    $carrito->agregarProducto($producto3, 3);

    $carrito->mostrarProductos();

    $factura = new Factura();
    $factura->generarFactura($cliente1, $carrito);
