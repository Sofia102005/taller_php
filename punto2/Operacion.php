<?php
require 'clase.php';

$calculadora = new Calculadora();

$resultado = "";

if (isset($_POST['Fio']) || isset($_POST['Fac'])) {

    $calculadora->set('numero', $_POST['numero']);

    if (isset($_POST['Fio'])) {
        $accion = 'Fibonacci';
        $metodo = 'fibonacci';
    } else {
        $accion = 'Factorial';
        $metodo = 'factorial';
    }

    $resultado = $calculadora->$metodo();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h1> Resultado</h1>
    <p><?php echo $resultado; ?></p>
    <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../punto1/Acro.html">Punto 1</a></li>
        <li><a href="FioFac.html">Regresar </a></li>
        <li><a href="../Estadistica.html">Punto 3</a></li>
        <li><a href="../Conjunto.html">Punto 4</a></li>
        <li><a href="../punto5/Bina.html">Punto 5</a></li>
        <li><a href="../Arbol.html">Punto 6</a></li>
    </ul>
</body>

</html>