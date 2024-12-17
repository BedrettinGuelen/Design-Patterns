<?php

namespace ObserverPattern;

require_once "KamilKoc.php";
require_once "KizilayBranch.php";
require_once "Baraj.php";
require_once "Balgat.php";
require_once "Uye.php";
require_once "UyeList.php";
require_once "Bayi.php";

function printHeader(string $title): void
{
    echo PHP_EOL . "======================================" . PHP_EOL;
    echo "********** $title **********" . PHP_EOL;
    echo "======================================" . PHP_EOL . PHP_EOL;
}

// KamilKoc Bölümü
printHeader("KizilayBranch Routes");

$kamilKoc = new KamilKoc("Ankara-Istanbul", 100);
$kizilayBranch = new KizilayBranch();

$kamilKoc->addObserver($kizilayBranch);
$kamilKoc->addNewRoute("Ankara-Izmir");

// Baraj Bölümü
printHeader("Baraj Water Levels");

$baraj = new Baraj("Baraj", 50);
$balgat = new Balgat();

$baraj->addObserver($balgat);

for ($i = 0; $i < 15; $i++) {
    $baraj->increaseWaterLevel();
}

// UyeList ve Bayi Bölümü
printHeader("Bayi Uye Listesi");

$uyeList = new UyeList();
$bayi = new Bayi();

$uyeList->addObserver($bayi);

$new1 = new Uye("Ali", "ali@cdc.de");
$new2 = new Uye("Veli", "veli@cdc.de");

echo ">> Yeni üyeler ekleniyor:" . PHP_EOL;
$uyeList->addUye($new1);
$uyeList->addUye($new2);

echo PHP_EOL . ">> Üye siliniyor:" . PHP_EOL;
$uyeList->removeUye($new1);

printHeader("Bayi Üye Listesi Güncellendi");
