<?php

require_once '../constantes.php';

function sumar($num1, $num2) {
    return $num1 + $num2;
}

function areaCirculo($radio) {
    return pow($radio, 2) * pi;
}

echo "El área de un círculo de 52 unidades de radio es: " . areaCirculo(52);
?>
