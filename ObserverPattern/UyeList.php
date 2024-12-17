<?php

namespace ObserverPattern;

require_once "Observable.php";
require_once "Uye.php";

class UyeList extends Observable
{
    protected array $uyeler = [];
    protected ?Uye $lastAddedUye = null;
    protected ?Uye $lastRemovedUye = null;

    public function addUye(Uye $uye): void
    {
        if (!in_array($uye, $this->uyeler, true)) {
            $this->uyeler[] = $uye;
            $this->lastAddedUye = $uye;
            $this->lastRemovedUye = null;
            $this->notifyObservers('add');
        }
    }
    public function removeUye(Uye $uye): void
    {
        $key = array_search($uye, $this->uyeler, true);
        if ($key !== false) {
            unset($this->uyeler[$key]);
            $this->lastRemovedUye = $uye;
            $this->lastAddedUye = null;
            $this->uyeler = array_values($this->uyeler);
            $this->notifyObservers('remove');
        }
    }

    public function getUyeler(): array
    {
        return $this->uyeler;
    }

    public function getLastAddedUye(): ?Uye
    {
        return $this->lastAddedUye;
    }

    public function getLastRemovedUye(): ?Uye
    {
        return $this->lastRemovedUye;
    }

    public function notifyObservers(string $action = 'update'): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this, $action);
        }
    }

}