<?php 

/*
    Uma loja aplica descontos conforme o valor do carrinho.

    Regras

    Até R$100 → sem desconto

    De R$101 a R$300 → 10%

    Acima de R$300 → 15%
*/

function applyDiscount($price){
   if($price <=100){
        return 0; 
   }elseif($price >=101 && $price <=300){
        return 10; 
   }elseif($price > 300){
        return 15; 
   }

}

$price = readline("Digite o valor da compra: ");

$discount = applyDiscount($price); 

if($discount ==0 ){
    echo "Não teve disconto";
}else{
    echo "Você irá receber " . $discount . "% de disconto"; 
}