<?php 

require 'Cart.php';
require 'CartItem.php';
require 'Product.php';

$product = new Product(123,"Notebook", 1.200, 100); 

$cartIitem = new CartItem($product, 5); 

$cart = new Cart(); 
$cart->addProduct($cartIitem->product, $cartIitem->quantity); 


