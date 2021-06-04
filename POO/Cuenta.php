<?php

/*
  Las interfaces de objetos permiten crear código con el cual especificar
  qué métodos deben ser implementados por una clase, sin tener que
  definir cómo estos métodos son manipulados.

  Las interfaces se definen de la misma manera que una clase, aunque
  reemplazando la palabra reservada class por la palabra reservada
  interface y sin que ninguno de sus métodos tenga su contenido definido.

  Todos los métodos declarados en una interfaz deben ser públicos,
  ya que ésta es la naturaleza de una interfaz.
 */

interface Cuenta {

    const MONEDA = "soles";

    public function asignarSaldo($saldo);

    public function calcularInteres();

    public function mostrarSaldo();
}

class CuentaAhorros implements Cuenta {

    private $saldo;

    public function asignarSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function calcularInteres() {
        $interes = $this->saldo * 0.05;
        echo "El interés que generará su cuenta es: " . $interes . "<br/>";
    }

    public function mostrarSaldo() {
        echo "Saldo en su cuenta: " . $this->saldo . " " . Cuenta::MONEDA . "<br/>";
    }

}

$cueA = new CuentaAhorros();
$cueA->asignarSaldo(15000);
$cueA->calcularInteres();
$cueA->mostrarSaldo();

class CuentaSueldo implements Cuenta {

    private $saldo;

    public function asignarSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function calcularInteres() {
        $interes = $this->saldo * 0.12;
        echo "Su cuenta generará: " . $interes . " en el futuro<br/>";
    }

    public function mostrarSaldo() {
        echo "Saldo actual: " . $this->saldo . " " . Cuenta::MONEDA . "<br/>";
    }

}

$cueS = new CuentaSueldo();
$cueS->asignarSaldo(2500);
$cueS->calcularInteres();
$cueS->mostrarSaldo();
