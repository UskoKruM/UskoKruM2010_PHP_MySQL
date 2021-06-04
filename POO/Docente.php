<?php

require_once './Persona.php';

class Docente extends Persona {

    public $sueldo;

}

$doc1 = new Docente();
$doc1->apellidos = "Garcia Fuentes";
$doc1->nombres = "Oscar Alejandro";
$doc1->sueldo = 750;

echo $doc1->apellidos . " gana " . $doc1->sueldo . " soles<br/>";
