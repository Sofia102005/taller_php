<?php
$binario = $_POST['binario'];

$binario = new Binario($binario);

class Binario {
    private $binario;

    public function __construct($binario) {
        $this->binario = $binario;
    }

    public function set_binario($binario) {
        $this->binario = $binario;
    }

    public function get_binario() {
        return $this->binario;
    }

    public function decimal() {
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
    
</body>
</html>