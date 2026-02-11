<?php 



class Cart {
    public $cartItem = []; 
 
    public function addProduct(Product $product, int $qtd) {
        array_push($this->cartItem, ['product'=>$product,'qtd'=>$qtd]); 
        var_export($this->cartItem); 
        
        var_dump($this->cartItem[0]['product']->id);
        if($this->cartItem[0]['product']->id == $product->id)
        {
            $qtd++;             
        }

       
    }

    public function removeProduct(int $productId){

    }

    public function getTotal(){

    }

    public function getItems(){

    }
}