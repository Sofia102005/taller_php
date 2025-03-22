<?php
    $acrom->setNombre($_POST['frase']);
 


class Frase {
    public $frase;
    public $palabras;
    public $acrom;

    function set_frase($frase) {
        $this->frase = $frase;
      }
    
    function get_frase() {
    $palabras = explode(" ", $frase);
    print_r($palabras);

    }
    
    }
    




