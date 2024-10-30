<?php


class Preference {
    protected static ?Preference $instance = null;

    final private function __construct() {
    }
    final protected function __clone() {
    }
    final public function __wakeup() {
    }

    public static function createInstance(): Preference
    {
        if(static::$instance === null)
        {
            static::$instance = new Preference();
        }
        return static::$instance;
    }

    public function greetingSingleton(): void
    {
        echo "Hello from ".self::class." class.\n";
    }

}