<?php

require_once './DAO.php';

$dao = new DAO();
$query = "UPDATE curso SET nombre = :nom, creditos = :cre WHERE codigo = :cod";
$parametros = array("nom" => "Artes Plásticas 25", "cre" => 4, "cod" => "471942");

try {
    $resultado = $dao->ejecutarOrden($query, $parametros);
    if ($resultado === 0) {
        echo "Ninguna actualización realizada...";
    } else if ($resultado === 1) {
        echo "Actualización exitosa.";
    } else {
        echo "Ocurrió un error...";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
