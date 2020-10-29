<?php

namespace Prototype\App;

class Welcome
{
    public static function greet()
    {
        if (php_sapi_name() !== 'cli') {
            header('Content-Type: application/json');
        }
        echo file_get_contents(__DIR__ . "/../../composer.json");
    }
}
