<?php

require_once './DAO.php';

$dao = new DAO();
// $query = "INSERT INTO curso (codigo, nombre, creditos) VALUES ('701490', 'Análisis de Sistemas', 6)";
$query = "INSERT INTO curso (codigo, nombre, creditos) VALUES (:cod, :nom, :cre)";
$parametros = array("cod" => "873259", "nom" => "Teoría de estudios", "cre" => 4);

try {
    $resultado = $dao->ejecutarOrden($query, $parametros);
    if ($resultado >= 0) {
        echo "Operación exitosa.";
    } else {
        echo "Ocurrió un error...";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
