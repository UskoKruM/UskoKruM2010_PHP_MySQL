<?php

require_once './parametros.php';

// $conex = mysqli_connect("localhost", "root", "123456", "condominio", "3306");
$conex = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BASE_DATOS, PUERTO);

if (!mysqli_connect_errno()) {
    echo "Conexión exitosa<br/>";
    echo mysqli_get_host_info($conex) . "<br/>";
    mysqli_close($conex); // Se cierra la conexión.
} else {
    echo "Error en la conexión... Código: " . mysqli_connect_errno() . "<br/>";
}
?>