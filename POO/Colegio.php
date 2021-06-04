<?php

class Colegio {

    public $nombre;
    private $director;

    // Método SET
    public function setDirector($direc) {
        $this->director = $direc;
    }

    // Método GET
    public function getDirector() {
        return $this->director;
    }

}

$cole1 = new Colegio();
$cole1->nombre = "San José";
$cole1->setDirector("Juan Zapata");
echo "Nombre del director: " . $cole1->getDirector() . "<br/>";
