<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto
{
    public $materiale;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_materiale)

    {
      parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

      $this->materiale = $_materiale;   
    }
}