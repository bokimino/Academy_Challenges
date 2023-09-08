<?php

class MarketStall {
    
    private $products = [];

    public function addToMarket($product) 
    {
        if ($product instanceof Product) {
            $this->products[] = $product;
        }
    }

    public function getItem($productName, $amount) 
    {
        foreach ($this->products as $product) {
            if ($product->name === $productName) {
                return ['amount' => $amount, 'item' => $product];
            }
        }
        return false;
    }
}

    
  
