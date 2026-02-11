<?php 
declare(strict_types=1);
class Product {
    public int $id; 
    public string $name; 
    public $price; 
    public int $stock; 

    public function __construct($id, $name, $price, $stock)
    {
       $this->id = $id; 
       $this->name = $name; 
       $this->price = $price; 
       $this->stock = $stock; 
    }

    
}