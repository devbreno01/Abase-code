<?php 

require_once  __DIR__ . "/ItemBiblioteca.php"; 

class Livro extends ItemBiblioteca
{
    private $author; 

    public function __construct($title,$year, $author)
    {
        $this->title = $title; 
        $this->year = $year; 
        $this->author = $author; 
    }

     public function getInfo() : void
    {
          echo "Titulo: " . $this->title . "\nAno: " . $this->year . "\n Autor: " . $this->author; 
    }
}