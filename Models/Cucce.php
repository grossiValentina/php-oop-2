<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/../Traits/Colorabile.php";

class Cucce extends Prodotto
{
  use Colorabile;

  public $dimensione;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_dimensione )

    {
      parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

      $this->dimensione = $_dimensione;   
    }
}