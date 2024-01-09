<?php

class Cibo extends Prodotto
{
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_immagine, $_categoria, $_scadenza)

    {
      parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

      $this->scadenza = $_scadenza;   
    }
}