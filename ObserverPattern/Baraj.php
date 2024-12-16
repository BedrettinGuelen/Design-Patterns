<?php

namespace ObserverPattern;

use ObserverPattern\Observable;

class Baraj extends Observable
{
    protected string $name;
    protected float $waterLevel;

    public function __construct(string $name, float $waterLevel)
    {
        $this->name = $name;
        $this->waterLevel = $waterLevel;
    }

    public function setWaterLevel(float $waterLevel): void
    {
        $this->waterLevel = $waterLevel;
    }

    public function increaseWaterLevel(): void
    {
        $this->waterLevel += 10;
        $this->notifyObservers();
    }

    public function getWaterLevel(): float
    {
        return $this->waterLevel;
    }

    public function getWarningLevel(): string
    {
        if ($this->waterLevel <= 70) {
            return "Normal";
        } elseif ($this->waterLevel <= 90) {
            return "Caution";
        } elseif ($this->waterLevel <= 120) {
            return "Warning";
        } else {
            return "Danger";
        }

    }
}