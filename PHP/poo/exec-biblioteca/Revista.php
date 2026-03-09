<?php 
require_once  __DIR__ . "/ItemBiblioteca.php"; 

class Revista extends ItemBiblioteca
{
    private $edition; 

    public function __construct($title,$year, $edition)
    {
        $this->title = $title; 
        $this->year = $year; 
        $this->edition = $edition; 
    }

    public function getInfo():void
    {
          echo "\nTitulo: " . $this->title . "\nAno: " . $this->year . "\n Edição: " . $this->edition; 
    }
}