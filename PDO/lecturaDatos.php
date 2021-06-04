<?php

require_once './DAO.php';

$dao = new DAO();
$consulta = "SELECT codigo, nombre, creditos "
        . "FROM curso ORDER BY nombre ASC";

try {
    $datos = $dao->ejecutarConsulta($consulta);
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
