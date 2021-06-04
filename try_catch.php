<?php

function dividir($n1, $n2) {
    if ($n2 === 0) {
        throw new Exception("División por cero.");
    } else {
        return $n1 / $n2;
    }
}

try {
    echo dividir(5, 2) . "<br/>";
    echo dividir(7, 1) . "<br/>";
} catch (Exception $ex) {
    echo "Excepción ocurrida: " . $ex->getMessage() . "<br/>";
} finally {
    echo "Todo terminó.<br/>";
}

?>