<?php

namespace FactoryPattern;

use FactoryPattern\Vehicle;

class Car implements Vehicle
{

    public function drive(): string
    {
        return "Driving a car.";
    }
}