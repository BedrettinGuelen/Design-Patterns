<?php

namespace FactoryPattern;

use FactoryPattern\Vehicle;

class Motorcycle implements Vehicle
{

    public function drive(): string
    {
        return "Driving a motorcycle.";
    }
}