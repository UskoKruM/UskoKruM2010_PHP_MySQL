<?php

// Persona
// edad
// nombres
// sexo, etc
// caminar
// correr
// dormir
// comer

class Persona {

    public $apellidos;
    protected $nombres;
    public $edad;

    function saludar() {
        echo "Hola, gusto en conocerte<br/>";
    }

}

// Instancia de la clase Persona:
/*
$per1 = new Persona();
$per1->apellidos = "Tapia Ruiz";
$per1->nombres = "Luis";
$per1->edad = 25;

echo $per1->apellidos . "<br/>";
echo $per1->edad . "<br/>";

$per1->saludar();

$per2 = new Persona();
$per2->apellidos = "Sandoval Carrera";
$per2->nombres = "Ana";
$per2->edad = 23;
echo $per2->apellidos . "<br/>";
 */
?>