<?php

$datosVisitante = $_SERVER['HTTP_USER_AGENT'];

echo $datosVisitante . "<br/>";

echo strpos($datosVisitante, "Windows NT 10.0") . "<br/>";

echo "Sistema Operativo:<br/>";
if (strpos($datosVisitante, "Windows NT 10.0") > 0) {
    echo "Windows 10<br/>";
} elseif (strpos($datosVisitante, "Windows NT 6.3") > 0) {
    echo "Windows 8.1<br/>";
} else {
    echo "Otro sistema operativo...<br/>";
}

echo "Navegador:<br/>";
if (strpos($datosVisitante, "Chrome") > 0) {
    echo "Google Chrome<br/>";
} elseif (strpos($datosVisitante, "Firefox") > 0) {
    echo "Mozilla Firefox<br/>";
} else {
    echo "Otro navegador web...<br/>";
}
?>