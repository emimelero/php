<?php
if (!class_exists('Articulo')) {
    require_once('class.articulo.php');
}

final class ArticuloRebajado extends Articulo {
    private $rebaja;

    public function __construct($pNombre, $pPrecio, $pRebaja) {
        parent::__construct($pNombre, $pPrecio);
        $this->rebaja = $pRebaja;
    }

    private function calculaDescuento() {
        return ($this->precio * $this->rebaja) / 100;
    }

    public function precioRebajado() {
        return $this->precio - $this->calculaDescuento();
    }

    public function __toString() {
        $cadena = parent::__toString();
        $cadena .= 'La rebaja es: ' . $this->rebaja . ' %<br />';
        $cadena .= 'El descuento es: ' . self::calculaDescuento() . ' &euro;<br />';
        return $cadena;
    }
}

$articuloRebajado = new ArticuloRebajado('Bicicleta', 352.10, 20);

echo $articuloRebajado;

echo "El precio del artículo rebajado es " . $articuloRebajado->precioRebajado() . " &euro;<br />";

echo "<pre>";
var_dump($articuloRebajado);
echo "</pre>";
?>
