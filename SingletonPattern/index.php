<?php

require_once "Preference.php";

echo "Begin Singleton.\n";
$pref1 = Preference::createInstance();
$pref2 = Preference::createInstance();

if($pref1 === $pref2)
{
    echo "Singleton is working.\n";
    $pref1->greetingSingleton();
    $pref2->greetingSingleton();
}
else
{
    echo "Singleton is not working.\n";
}

