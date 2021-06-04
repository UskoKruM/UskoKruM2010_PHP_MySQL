<?php

require_once './parametros.php';

$conex = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BASE_DATOS, PUERTO);

if (!mysqli_connect_errno()) {
    echo "Conexión exitosa.<br/>";
    // SQL: Structured Query Language (Lenguaje Estructurado de Consultas).

    $sql = "UPDATE tipousuario SET nombre = 'Propietario 123', vigencia = 3 WHERE codigo = 2";
    $exito = mysqli_query($conex, $sql);

    if ($exito) {
        echo "Registro actualizado con éxito.<br/>";
    } else {
        echo "Ocurrió un error en la actualización.<br/>";
    }
} else {
    echo "Error en la conexión: " . mysqli_connect_errno() . "<br/>";
}
?>