<?php 

require 'Product.php';
require 'Cart.php';
$product = new Product(123,"Notebook", 1.200, 100); 
$product2 = new Product(4356435,"TESTE PRODUTO 2", 1.300, 200); 
$cart = new Cart(); 
$cart->addProduct($product, 5); 
$cart->addProduct($product2, 10); 

//$cart->removeProduct(123);
$cart->getTotal();
$cart->getItems();
//ar_dump($cart->items); 
