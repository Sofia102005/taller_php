<?php
class NodoArbol {
    public $valor, $izq, $der;
    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = $this->der = null;
    }
}

class ArbolBinario {
    public function construirArbol($preorden, $inorden) {
        if (!$preorden || !$inorden) return null;
        return $this->construir($preorden, $inorden);
    }

    private function construir($preorden, $inorden) {
        if (empty($preorden)) return null;

        $raizValor = array_shift($preorden);
        $raiz = new NodoArbol($raizValor);
        $pos = array_search($raizValor, $inorden);

        $raiz->izq = $this->construir(array_slice($preorden, 0, $pos), array_slice($inorden, 0, $pos));
        $raiz->der = $this->construir(array_slice($preorden, $pos), array_slice($inorden, $pos + 1));

        return $raiz;
    }

    public function mostrarArbol($raiz) {
        if (!$raiz) return "";
        $html = "<ul><li><div>{$raiz->valor}</div>";
        if ($raiz->izq || $raiz->der) {
            $html .= "<ul>";
            if ($raiz->izq) $html .= "<li>" . $this->mostrarArbol($raiz->izq) . "</li>";
            if ($raiz->der) $html .= "<li>" . $this->mostrarArbol($raiz->der) . "</li>";
            $html .= "</ul>";
        }
        $html .= "</li></ul>";
        return $html;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preorden = explode(",", str_replace(" ", "", $_POST["preorden"]));
    $inorden = explode(",", str_replace(" ", "", $_POST["inorden"]));

    $arbol = new ArbolBinario();
    $raiz = $arbol->construirArbol($preorden, $inorden);

    echo "<h2>Árbol Generado</h2>";
    echo "<div class='arbol'>" . $arbol->mostrarArbol($raiz) . "</div>";
}
?>
