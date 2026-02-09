<?php 

class CartItem {
    /*product
    quantity
    subtotal() */

    public array $product; 
    public int $quantity; 

    public function subtotal(){
        return $this->product[0]['price'] * $this->quantity; 
    }
}