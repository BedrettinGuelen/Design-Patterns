<?php

namespace ObserverPattern;

require_once "Observable.php";
require_once "Observer.php";
require_once "UyeList.php";

class Bayi extends Observable implements Observer
{

    public function update(Observable $observable, string $action = 'update'): void
    {
        if ($observable instanceof UyeList) {
            if ($action === 'add') {
                $lastAdded = $observable->getLastAddedUye();
                if ($lastAdded) {
                    echo ">> Yeni üye eklendi: " . $lastAdded->getName() . PHP_EOL;
                    echo "   E-posta: " . $lastAdded->getEmail() . PHP_EOL;
                }
            } elseif ($action === 'remove') {
                $lastRemoved = $observable->getLastRemovedUye();
                if ($lastRemoved) {
                    echo ">> Üye silindi: " . $lastRemoved->getName() . PHP_EOL;
                    echo "   E-posta: " . $lastRemoved->getEmail() . PHP_EOL;
                }
            }
        }
    }
}