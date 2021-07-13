<?php

class Autoload{

    public static function autoloader($classe)
    {
        $classe = str_replace("\\", "/", $classe);
        require "$classe.php";
    }

    public static function register()
    {
        spl_autoload_register(['autoloader', __CLASS__]);
    }
}