<?php 

require_once (__DIR__) . '/classes/product.php';
require_once (__DIR__) . '/classes/marketStall.php';
require_once (__DIR__) . '/classes/cart.php';


$orange = new Product('Orange', 35, true);
$potato = new Product('Potato', 240, false);
$nuts = new Product('Nuts', 850, true);
$kiwi = new Product('Kiwi', 670, false);
$pepper = new Product('Pepper', 330, true);
$raspberry = new Product('Raspberry', 555, false);

$marketStall1 = new MarketStall();
$marketStall2 = new MarketStall();

$marketStall1->addToMarket($orange);
$marketStall1->addToMarket($potato);
$marketStall1->addToMarket($nuts);

$marketStall2->addToMarket($kiwi);
$marketStall2->addToMarket($pepper);
$marketStall2->addToMarket($raspberry);

$cart = new Cart();

$cart->addToCart($marketStall1->getItem('Orange', 3));
$cart->addToCart($marketStall2->getItem('Kiwi', 2));
$cart->addToCart($marketStall2->getItem('Raspberry', 1));

$cart->printReceipt();