<?php

namespace FactoryPattern;

use FactoryPattern\Vehicle;

class Truck implements Vehicle
{

    public function drive(): string
    {
        return "Driving a truck.";
    }
}