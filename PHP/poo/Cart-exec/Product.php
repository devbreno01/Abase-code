<?php 
declare(strict_types=1);
class Product {
    public int $id; 
    public string $name; 
    public $price; 
    public $stock; 

    public function __construct($id, $name, $price, $stock)
    {
       $this->id = $id; 
       $this->name = $name; 
       $this->price = $price; 
       $this->stock = $stock; 
    }

    public function getProducts()
    {
        $product = [
            "id" => $this->id, 
            "name" => $this->name, 
            "price" => $this->price, 
            "stock" => $this->stock
        ];

        return $product; 
    }
}