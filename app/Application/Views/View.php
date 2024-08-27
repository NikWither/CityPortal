<?php

namespace App\Application\Views;

class View implements ViewInterface
{
    public static function show(string $view): void
    {
        $path = __DIR__ . "/../../../views/$view.view.php";
        include $path;
    }
}