<?php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';




$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('Black','3','diesel','50','100');
echo $truck->getStorageCapacity();
$truck->setStorageCapacity(0);
echo $truck->getStorageCapacity();
$truck->setStorageCapacity(90);
echo $truck->getStorageCapacity();
$truck->setStorageCapacity(121);
echo $truck->getStorageCapacity();
