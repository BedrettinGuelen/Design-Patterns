<?php

namespace ObserverPattern;

use ObserverPattern\Observable;
use ObserverPattern\Observer;

class Balgat extends Observable implements Observer
{
    protected string $name;
    public function update(Observable $observable): void
    {
        if ($observable instanceof Baraj) {
            $warningLevel = $observable->getWarningLevel();
            $waterLevel = $observable->getWaterLevel();
            echo "Balgat updated with new water level: $waterLevel, Warning level: $warningLevel" . PHP_EOL;

            if ($warningLevel === "Danger") {
                echo "Balgat is in danger, please take action!" . PHP_EOL;
            }elseif ($warningLevel === "Warning") {
                echo "Balgat is in warning level, please be cautious!" . PHP_EOL;
            }elseif ($warningLevel === "Caution") {
                echo "Balgat is in caution level, please be careful!" . PHP_EOL;
            }elseif ($warningLevel === "Normal") {
                echo "Balgat is in normal level, everything is fine!" . PHP_EOL;
            }
        }
    }
}