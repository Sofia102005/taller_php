<?php
class CalculoEstadistico {
    private $numeros;

    public function __construct($numeros) {
        $this->numeros = array_filter($numeros, 'is_numeric'); // Filtra valores no numéricos
    }

    public function calcularPromedio() {
        return count($this->numeros) > 0 
            ? array_sum($this->numeros) / count($this->numeros) 
            : "No hay datos";
    }

    public function calcularMediana() {
        if (empty($this->numeros)) return "No hay datos";

        sort($this->numeros);
        $n = count($this->numeros);
        $m = floor($n / 2); // Asegura índice válido

        return ($n % 2 == 0) 
            ? ($this->numeros[$m - 1] + $this->numeros[$m]) / 2 
            : $this->numeros[$m];
    }

    public function calcularModa() {
        if (empty($this->numeros)) return "No hay datos";

        $valoresEnteros = array_map('strval', $this->numeros); // Convertir a strings
        $frecuencias = array_count_values($valoresEnteros);

        if (empty($frecuencias)) return "No hay moda"; // Evita errores con max()

        $maxFrecuencia = max($frecuencias);
        $modas = array_keys($frecuencias, $maxFrecuencia);

        return count($modas) === count($this->numeros) 
            ? "No hay moda" 
            : implode(", ", $modas);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numeros = array_map('floatval', explode(',', $_POST['numeros']));
    $calculo = new CalculoEstadistico($numeros);

    echo "<p>Promedio: {$calculo->calcularPromedio()}</p>";
    echo "<p>Mediana: {$calculo->calcularMediana()}</p>";
    echo "<p>Moda: {$calculo->calcularModa()}</p>";
}
