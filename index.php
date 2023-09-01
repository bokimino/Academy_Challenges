<?php 
require_once 'classes/printable.php';
require_once 'classes/furniture.php';
require_once 'classes/sofa.php';
require_once 'classes/bench.php';
require_once 'classes/chair.php';

echo 'Part 1' . "<br> <br>";

$furniture1 = new Furniture(50, 120, 80);
$furniture1->setIsForSeat(true);
$furniture1->setIsForSleep(false);


echo  $furniture1->area() . "<br>";
echo  $furniture1->volume() . "<br> <br>";



echo 'Part 2' . "<br> <br>";



$sofa1 = new Sofa("80", "160", "100");
$sofa1->setIsForSeat(true);
$sofa1->setIsForSleep(false);
$sofa1->setSeats(3);
$sofa1->setArmrest(2);

echo $sofa1->area() . "<br>";
echo $sofa1->volume() . "<br>";
echo $sofa1->area_opened() . "<br>";

$sofa1->setIsForSleep(true);
$sofa1->setLength(200);
echo $sofa1->area_opened() . "<br> <br>";

echo 'Part 3' . "<br> <br>";

$bench = new Bench(150, 60, 90);
$bench->setIsForSeat(true);
$bench->setIsForSleep(false);

$chair = new Chair(50, 50, 80);
$chair->setIsForSeat(true);
$chair->setIsForSleep(false);

echo get_class($bench);
echo '<br>';
echo $bench->area() . "<br>";

$bench->print();
echo '<br>';
$bench->sneakpeek();
echo '<br>';
$bench->fullinfo();
echo '<br>';

$chair->print();
echo '<br>';
$chair->sneakpeek();
echo '<br>';
$chair->fullinfo();
echo '<br>';