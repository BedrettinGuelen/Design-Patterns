<?php

namespace ObserverPattern;

require_once "Observable.php";
require_once "Observer.php";

class KizilayBranch extends Observable implements Observer
{
    private array $localRoutes = [];

    public function update(Observable $observable): void
    {
        if ($observable instanceof KamilKoc) {
            $this->localRoutes = $observable->getRoutes();
            echo "KizilayBranch updated with new routes: " . implode(', ', $this->localRoutes) . PHP_EOL;
        }
    }

    public function addRouteForKamilKoc(string $route, KamilKoc $kamilKoc): void
    {
        $kamilKoc->addNewRoute($route);
    }

    public function getLocalRoutes(): array
    {
        return $this->localRoutes;
    }

}