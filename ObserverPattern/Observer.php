<?php

namespace ObserverPattern;

interface Observer
{
    public function update(Observable $observable);
}