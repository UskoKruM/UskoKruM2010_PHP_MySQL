<?php

$altura = 1.49;

echo floor($altura) . "<br/>"; // Redondeo hacia abajo.

echo round($altura) . "<br/>"; // Redondeo dependiendo del valor.

echo ceil($altura) . "<br/>"; // Redondeo hacia arriba.

$decimal = 6.548734102;

echo round($decimal) . "<br/>";

echo (round($decimal * 1000) / 1000) . "<br/>";
?>