<?php

namespace Prototype;

class Prototype
{
    public static function welcome()
    {
        if (php_sapi_name() !== 'cli') {
            header('Content-Type: application/json');
        }
        echo file_get_contents(__DIR__ . "/../composer.json");
    }
}
