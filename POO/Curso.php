<?php

class Curso {

    public $nombre;
    private $docente;

    function mencionarDocente() {
        echo "Docente: " . $this->docente;
    }

}

/*
  - public => Será posible utilizar esta propiedad o método en todo el script.
  - private => Será posible utilizar esta propiedad o método sólo en la clase
  a la que pertenece.
  - protected => Será posible utilizar esta propiedad o método sólo en la clase
  a la que pertenece y en sus descendientes (hijas).
  - final => No podrá ser sobreescrita por sus descendientes.
  - abstract => Para ser usado, deberá heredarse primero.
 */

$cur1 = new Curso();
$cur1->nombre = "Programación";
// $cur1->docente = "Oscar García";

$cur1->mencionarDocente();

// echo $cur1->nombre . " es dictado por: " . $cur1->docente . "<br/>";
