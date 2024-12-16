<?php

namespace ObserverPattern;

require_once "Observable.php";

class KamilKoc extends Observable
{
    protected string $travelRoute;
    protected float $travelPrice;
    
    protected array $routes = [];
    
    public function __construct(string $travelRoute, float $travelPrice)
    {
        $this->travelRoute = $travelRoute;
        $this->travelPrice = $travelPrice;
        $this->routes[] = $travelRoute;
    }

    public function addNewRoute(string $route): void
    {
        $this->routes[] = $route;
        $this->notifyObservers();
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}