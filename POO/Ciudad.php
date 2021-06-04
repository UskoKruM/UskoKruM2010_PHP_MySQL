<?php

require_once './Pais.php';

class Ciudad {

    public $nombre;
    public $abreviatura;
    public $numeroHabitantes;
    public $pais;

    /* Un constructor es una subrutina (método / función) cuya misión es 
     * inicializar un objeto de una clase.
     * En el constructor se asignan los valores iniciales del nuevo objeto. */

    function __construct($nom, $abre, $numH, $pai) {
        $this->nombre = $nom;
        $this->abreviatura = $abre;
        $this->numeroHabitantes = $numH;
        $this->pais = $pai;
    }

}

$pai1 = new Pais("Perú", "Martín Vizcarra");

$ciu1 = new Ciudad("Chiclayo", "CIX", 560000, $pai1);
echo "Nombre de la ciudad: " . $ciu1->nombre . "<br/>";
echo "País al que pertenece la ciudad: " . $ciu1->pais->nombre . "<br/>";
echo "Presidente del país al que pertenece la ciudad: " . $ciu1->pais->presidente . "<br/>";