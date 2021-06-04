<?php

require_once './parametros.php';

$conex = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BASE_DATOS, PUERTO);

if (!mysqli_connect_errno()) {
    echo "Conexión exitosa.<br/>";
    // SQL: Structured Query Language (Lenguaje Estructurado de Consultas).

    $sql = "INSERT INTO tipousuario (nombre, vigencia) VALUES ('Propietario', 1)";
    $exito = mysqli_query($conex, $sql);

    if ($exito) {
        echo "Registro insertado con éxito.<br/>";
    } else {
        echo "Ocurrió un error en la inserción.<br/>";
    }
} else {
    echo "Error en la conexión: " . mysqli_connect_errno() . "<br/>";
}
?>