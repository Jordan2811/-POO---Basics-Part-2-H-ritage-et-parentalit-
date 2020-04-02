<?php

require_once 'truck.php';
$truck = new Truck('blue', 4, 'fuel', 50);
echo $truck->setLoad(10) . ' ';
echo $truck->fullOrNot() . '<br>';
echo $truck->setLoad(70) . ' ';
echo $truck->fullOrNot() . '<br>';
$truck = new Truck('red', 3, 'electric', 30);
echo $truck->setLoad(-10) . ' ';
echo $truck->fullOrNot() . '<br>';
echo $truck->setLoad(70) . ' ';
echo $truck->fullOrNot();
echo $truck->brake();
echo $truck->forward();
