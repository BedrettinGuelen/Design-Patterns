<?php

namespace ObserverPattern;

abstract class Observable
{
    protected array $observers = [];

    public function addObserver(Observer $observer): void
    {
        if (!in_array($observer, $this->observers, true)) {
            $this->observers[] = $observer;
        }
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return (!($a === $observer));
        });
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}