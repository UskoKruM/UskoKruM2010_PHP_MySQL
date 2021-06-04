<?php

class Persona implements JsonSerializable {

    public $nombres;

    public function __construct($nom) {
        $this->nombres = $nom;
    }

    // JSON: JavaScript Object Notation
    public function jsonSerialize() {
        return get_object_vars($this);
    }

}

$per = new Persona("Oscar");

session_start(); // Iniciando una sesión.
$_SESSION["valor1"] = 130;
$_SESSION["persona"] = json_encode($per);

echo "<a href='pagina2.php'>Ir a la página 2</a>";
?>