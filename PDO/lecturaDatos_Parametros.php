<?php

require_once './DAO.php';

$nombreBuscar = "Lenguaje";
$dao = new DAO();
// Parámetros de signos de interrogación:
/*
  $consulta = "SELECT codigo, nombre, creditos "
  . "FROM curso WHERE nombre = ? AND creditos >= ? ORDER BY nombre ASC";
  $parametros = array($nombreBuscar, 10);
 */
// Parámetros de sustitución nombrados:
$consulta = "SELECT codigo, nombre, creditos "
        . "FROM curso WHERE nombre = :nom AND creditos >= :cre ORDER BY nombre ASC";
$parametros = array("nom" => $nombreBuscar, "cre" => 4);

try {
    $datos = $dao->ejecutarConsulta($consulta, $parametros);
    if (is_integer($datos)) {
        echo "Ocurrió un error...";
    } else {
        if (isset($datos) && !empty($datos) && sizeof($datos) > 0) {
            echo "<h1>Cursos: </h1>";
            foreach ($datos as $curso) {
                echo $curso["codigo"] . " - " . $curso["nombre"] . "-" . $curso["creditos"] . "<br/>";
            }
        }
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
