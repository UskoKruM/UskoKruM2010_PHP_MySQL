<?php

session_start();

$valor1 = $_SESSION["valor1"];
$persona = json_decode($_SESSION["persona"], false);

echo $valor1 . "<br/>";
// echo $persona["nombres"] . "<br/>";
echo $persona->nombres . "<br/>";

$_SESSION["valor2"] = "UskoKruM2010";

echo "<a href='pagina3.php'>Ir a la página 3</a>";
?>