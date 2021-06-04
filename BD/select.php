<?php

require_once './parametros.php';

$conex = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BASE_DATOS, PUERTO);

if (!mysqli_connect_errno()) {
    echo "Conexión exitosa.<br/>";
    mysqli_set_charset($conex, "utf8");
    // SQL: Structured Query Language (Lenguaje Estructurado de Consultas).
    $sql = "SELECT * FROM telefono";
    $datos = mysqli_query($conex, $sql);
    $numeroResultados = mysqli_num_rows($datos);
    // echo $numeroResultados;
    if ($numeroResultados > 0) {
        while ($fila = mysqli_fetch_assoc($datos)) {
            echo "Número: " . $fila["CodigoTipoTelefono"] . "<br/>";
        }
    } else {
        echo "0 datos o filas obtenidas...<br/>";
    }
    mysqli_close($conex);
} else {
    echo "Error en la conexión: " . mysqli_connect_errno() . "<br/>";
}
?>