<?php

session_start();

$valor1 = $_SESSION["valor1"];
$valor2 = $_SESSION["valor2"];

echo $valor1 . "<br/>";
echo $valor2 . "<br/>";

?>