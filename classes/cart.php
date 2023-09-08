<?php

class Cart {
   
    private $cartItems = [];

    public function addToCart($item)
    {
        if (is_array($item) && isset($item['amount']) && isset($item['item'])) {
            $this->cartItems[] = $item;
        }

    }
    
    public function printReceipt() 
    {
        if (empty($this->cartItems)) {
            return "Your cart is empty.";
            }
    
        $totalPrice = 0;
    
        foreach ($this->cartItems as $cartItem) {
            $product = $cartItem['item'];
            $amount = $cartItem['amount'];
            $itemPrice = $product->getPrice() * $amount;
            $totalPrice += $itemPrice;
    
            $productName = $product->name;
            $unit = $product->sellingByKg ? 'kgs' : 'gunny sacks';
    
            echo "$productName | $amount $unit | total= $itemPrice denars" . PHP_EOL;
            }
    
            echo "Final price amount: $totalPrice denars" . PHP_EOL;
        }
}