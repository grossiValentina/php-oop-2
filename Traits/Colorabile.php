<?php

trait Colorabile
{
    public $colore;

    public function setColorabile($_colore)
    {
        $this->colore = $_colore;
    }

    public function getColorabile()
    {
        return $this->colore;
    }
}