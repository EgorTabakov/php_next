<?php


trait TraitOptions
{
    private static $instance;
    private $handle;
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this->handle = fopen('log.txt', 'w');
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
