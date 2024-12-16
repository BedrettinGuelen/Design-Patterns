<?php

namespace FactoryPattern;

require_once "VehicleFactory.php";

$car = VehicleFactory::create('car');
echo $car->drive() . PHP_EOL;

$truck = VehicleFactory::create('truck');
echo $truck->drive() . PHP_EOL;

$vehicle = VehicleFactory::create('motorcycle');
echo $vehicle->drive() . PHP_EOL;
