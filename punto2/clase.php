<?php
interface Model {
    function get($prop);
    function set($prop, $value);
}

class Calculadora implements Model {
    private $numero = null;

    function set($prop, $value) {
        if ($prop == 'numero') {
            $this->numero = $value;
        }
    }

    function get($prop) {
        if ($prop == 'numero') {
            return $this->numero;
        }
    }

    function fibonacci() {
        $a = 0;
        $b = 1;
        $secuencia = "0 + 1";
        $resultado = 1;
        for ($i = 2; $i <= $this->numero; $i++) {
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
            $secuencia .= " + " . $temp;
            $resultado = $temp;
        }
        return "Secuencia: " . $secuencia . " = " . $resultado;
    }

    function factorial() {
        $resultado = 1;
        $secuencia = "1";
        for ($i = 2; $i <= $this->numero; $i++) {
            $resultado *= $i;
            $secuencia .= " x " . $i;
        }
        return "Secuencia: " . $secuencia . " = " . $resultado;
    }
}