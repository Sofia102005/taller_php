<?php
$binario = $_POST['binario'];

$binario = new Binario($binario);

class Binario
{
    private $binario;

    public function __construct($binario)
    {
        $this->binario = $binario;
    }

    public function set_binario($binario)
    {
        $this->binario = $binario;
    }

    public function get_binario()
    {
        return $this->binario;
    }

    public function decimal()
    {
        return decbin($this->binario);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Binario</title>
</head>

<body>
    <h1>El numero que ingreso fue: <?php echo $binario->get_binario(); ?></h1>
    <h1>El numero en binario: <?php echo $binario->decimal(); ?></h1>

    <li><a href="../index.html">Inicio</a></li>
    <li><a href="../punto1/Acro.html">Punto 1</a></li>
    <li><a href="../punto2/FioFac.html">Punto 2 </a></li>
    <li><a href="../Estadistica.html">Punto 3</a></li>
    <li><a href="../Conjunto.html">Punto 4</a></li>
    <li><a href="Bina.html">Regresar</a></li>
    <li><a href="../Arbol.html">Punto 6</a></li>
    </ul>

</body>

</html>