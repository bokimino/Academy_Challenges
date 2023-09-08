<?php 

class Product {
    public $name;
    public $price;
    public $sellingByKg;

public function __construct(string $name, int $price, bool $sellingByKg = true)
{

    $this->name = $name;
    $this->price = $price;
    $this->sellingByKg = $sellingByKg;
}
public function getPrice()
{
    return $this->price;
}
}