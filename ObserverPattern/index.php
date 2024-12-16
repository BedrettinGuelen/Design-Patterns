<?php

namespace ObserverPattern;

require_once "KamilKoc.php";
require_once "KizilayBranch.php";
require_once "Baraj.php";
require_once "Balgat.php";

$kamilKoc = new KamilKoc("Ankara-Istanbul", 100);

$kizilayBranch = new KizilayBranch();

$kamilKoc->addObserver($kizilayBranch);

$kamilKoc->addNewRoute("Ankara-Izmir");

echo "************************** KizilayBranch Routes **************************" . PHP_EOL;
echo "************************** Baraj Water Levels **************************" . PHP_EOL;

$baraj = new Baraj("Baraj", 50);

$balgat = new Balgat();

$baraj->addObserver($balgat);

for ($i = 0; $i < 15; $i++) {
    $baraj->increaseWaterLevel();
}

