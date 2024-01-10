<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/../Traits/Colorabile.php";

class Gioco extends Prodotto
{
    use Colorabile;
    public $materiale;
    

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_materiale)

    {
      parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

      $this->materiale = $_materiale;   
    }
}