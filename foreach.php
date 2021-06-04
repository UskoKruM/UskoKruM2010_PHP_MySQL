<?php

$matriz = array("Chiclayo", "Trujillo", "Chimbote", "Lima");

foreach ($matriz as $valor) {
    echo $valor . "<br/>";
}

foreach ($matriz as $valor => $x) {
    echo $valor;
}
?>