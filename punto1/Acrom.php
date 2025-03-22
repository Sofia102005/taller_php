<?php
$fraseRecibida = $_POST['frase'];

$frase = new Frase();

$frase->set_frase($fraseRecibida);

class Frase
{
  public $frase;
  public $palabras;
  public $letras;

  function set_frase($frase)
  {
    $this->frase = $frase;
  }

  function get_frase()
  {
    $this->palabras = explode(" ", $this->frase);

    $this->letras = array();
    foreach ($this->palabras as $palabra) {
      $this->letras[] = str_split($palabra);
    }
  }
}

$frase->get_frase();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acronimo</title>
</head>

<body>

  <h2>Frase es : <?php echo $fraseRecibida; ?> </h2>
  <h2>Acronimo:</h2>
  <h1>
    <?php
    foreach ($frase->letras as $letras) {
      if (!empty($letras)) {
        echo $letras[0];
      }
    }
    ?>
  </h1>

  <ul>
    <li><a href="../index.html">Inicio</a></li>
    <li><a href="Acro.html">Regresar</a></li>
    <li><a href="../punto2/FioFac.html">Punto 2 </a></li>
    <li><a href="../Estadistica.html">Punto 3</a></li> <!--Juli-->
    <li><a href="../Conjunto.html">Punto 4</a></li> <!--Juli-->
    <li><a href="../punto5/Bina.html">Punto 5</a></li>
    <li><a href="../Arbol.html">Punto 6</a></li> <!--Juli-->
  </ul>
</body>

</html>