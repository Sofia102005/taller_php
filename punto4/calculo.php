<?php
class Conjunto {
    private $conjuntoA;
    private $conjuntoB;

    public function __construct($a, $b) {
        $this->conjuntoA = array_unique($a);
        $this->conjuntoB = array_unique($b);
    }

    public function union() {
        return array_unique(array_merge($this->conjuntoA, $this->conjuntoB));
    }

    public function interseccion() {
        return array_values(array_intersect($this->conjuntoA, $this->conjuntoB));
    }

    public function diferenciaAB() {
        return array_values(array_diff($this->conjuntoA, $this->conjuntoB));
    }

    public function diferenciaBA() {
        return array_values(array_diff($this->conjuntoB, $this->conjuntoA));
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = array_map('intval', explode(',', $_POST['conjuntoA']));
    $b = array_map('intval', explode(',', $_POST['conjuntoB']));

    $conjunto = new Conjunto($a, $b);

    echo "<p>Unión: " . implode(", ", $conjunto->union()) . "</p>";
    echo "<p>Intersección: " . implode(", ", $conjunto->interseccion()) . "</p>";
    echo "<p>Diferencia A - B: " . implode(", ", $conjunto->diferenciaAB()) . "</p>";
    echo "<p>Diferencia B - A: " . implode(", ", $conjunto->diferenciaBA()) . "</p>";
}
