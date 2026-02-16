<?php 
require_once 'Product.php';

class CartItem {
    public Product $product; 
    public int $quantity; 

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function subtotal(){
        $this->product->price * $this->quantity; 
    }

    public function increaseQunatity(){
        $this->quantity++; 
    }

    public function decreaseQunatity(){
        $this->quantity--; 
    }
}