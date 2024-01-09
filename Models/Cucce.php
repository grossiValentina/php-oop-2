<?php
require_once __DIR__ . "/Prodotto.php";

class Cucce extends Prodotto
{
    public $dimensione;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_dimensione )

    {
      parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

      $this->dimensione = $_dimensione;   
    }
}