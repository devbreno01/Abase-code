<?php 

interface PaymentMethod{
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod{

    public function pay($amount){
        return "Pagamento de R$".number_format($amount, 2, ',', '.') ."  realizado com cartão de crédito";
    }
}

class PixPayment implements PaymentMethod{
    public function pay($amount){
        return "Pagamento de R$".number_format($amount, 2, ',', '.') ."  realizado com PIX";
    }
}

class BoletoPayment implements PaymentMethod{
    public function pay($amount){
        return "Pagamento de R$".number_format($amount, 2, ',', '.') ."  realizado com boleto";
    }
}

$pix = new PixPayment(); 
$creditCard = new CreditCardPayment(); 
$boleto = new BoletoPayment(); 

echo $pix->pay(200); 
echo "\n\n"; 
echo $creditCard->pay(1500); 
echo "\n\n"; 
echo $boleto->pay(3000);