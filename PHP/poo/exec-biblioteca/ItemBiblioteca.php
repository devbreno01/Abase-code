<?php 

abstract class ItemBiblioteca {

    protected $title; 
    protected $year; 

    public function getInfo(){
        echo "Titulo: " . $this->title . "Ano: " . $this->year; 
    }
}