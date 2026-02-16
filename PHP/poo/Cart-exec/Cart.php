<?php 

require_once 'CartItem.php'; 
class Cart {
    public array $items = []; 
 
    public function addProduct(Product $product, int $qtd) {
        foreach($this->items  as $item){
            if($item->product->stock < $qtd){
                throw new Error("Produto não possui essa quantidade em estoque");
                die();
            }
            
            if($item->product->id == $product->id){
                $item->quantity++; 
            }
                
        }
        $this->items[] = new CartItem($product, $qtd); 
    }

    public function removeProduct(int $productId){
        foreach($this->items  as $index => $item){
            if($item->product->id == $productId){
                unset($this->items[$index]); 
                
            }
                
        }
    }

    public function getTotal(){
        $i = 0; 
        foreach($this->items as $item){
           $i++;
        }

        return "Total de " . $i . " itens";
    }

    public function getItems(){
        foreach($this->items as $index => $item){
            echo "Product ". $index . "\n"; 
            echo "Nome: " . $item->product->name . "\nPreço: " .$item->product->price . "\nQuantidade: " . $item->quantity . "\n"; 
            
        }
    }
}