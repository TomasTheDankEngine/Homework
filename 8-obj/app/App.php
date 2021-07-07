<?php

namespace Bank;

class App
{
    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require __DIR__ . 'views/' . $file . '.php';
    }
}
