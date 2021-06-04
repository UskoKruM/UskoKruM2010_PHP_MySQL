<?php

// Herencia: Es una característica de la POO que permite reutilizar
// características (atributos o propiedades) y/o funcionalidades 
// de una clase para evitar repetir código.

require_once './Persona.php';

class Estudiante extends Persona {

    // parent::__construct();

    public $numeroCursos;

}

$est1 = new Estudiante();
$est1->apellidos = "Asenjo Diaz";
$est1->nombres = "Jesús";
echo $est1->apellidos . ", " . $est1->nombres . "<br/>";

$est1->numeroCursos = 6;

$est1->saludar();
echo "N° cursos: " . $est1->numeroCursos;
