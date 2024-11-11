<?php

    class calculadora {
        function sumar($num1, $num2) {
            return $num1 + $num2;
        }
        function restar($num1, $num2) {
            return $num1 - $num2;
        }
        function multiplicar($num1, $num2) {
            return $num1 * $num2;
        }
        function dividir($num1, $num2) {
            return $num1 / $num2;
        }
    }

    $calculadora = new calculadora();
    echo $calculadora->sumar(5,7)."<br>";
    echo $calculadora->restar(5,7)."<br>";
    echo $calculadora->multiplicar(5,7)."<br>";
    echo $calculadora->dividir(5,7)."<br>";