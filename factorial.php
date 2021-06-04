<?php

function factorial($numero) {
    $factorial = 1;
    $contador = 1;
    while ($contador <= $numero) {
        $factorial*=$contador;
        $contador++;
    }
    return $factorial;
}

for ($indice = 1; $indice <= 5; $indice++) {
    echo "Factorial de " . $indice . " es: " . factorial($indice) . "<br/>";
}
?>