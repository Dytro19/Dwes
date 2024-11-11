<?php

    class contador{
        private $valor=10; 

        function incrementar($cantidad){
            $this->valor+=$cantidad;
        }
        function decrementar($cantidad){
            if (($this->valor-=$cantidad)<0){
                $this->valor+=$cantidad;
                echo "El valor no debe ser menor a 0 <br>";
            }
            else{
                $this->valor+=$cantidad;
                $this->valor-=$cantidad;
            }
        }
        function mostrar(){
            echo "El valor es: $this->valor <br>";
        }
    }
    $contador= new contador();
    $contador->incrementar(7);
    $contador->mostrar();
    $contador->decrementar(8);
    $contador->mostrar();
    $contador->decrementar(60);
    $contador->mostrar();