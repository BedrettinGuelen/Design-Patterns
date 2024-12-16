<?php

namespace FactoryPattern;

require_once "Vehicle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "Motorcycle.php";

class VehicleFactory
{
    public static function create(string $type): Vehicle
    {
        switch ($type) {
            case 'car':
                return new Car();
            case 'truck':
                return new Truck();
            case 'motorcycle':
                return new Motorcycle();
            default:
                throw new \InvalidArgumentException('Invalid vehicle type.');
        }
    }
}