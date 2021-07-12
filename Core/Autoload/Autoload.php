<?php

class Autoload{

    public static function autoload($classe)
    {
        $classe = str_replace("\\", "/", $classe);
        require "$classe.php";
    }

    public static function register()
    {
        spl_autoload_register(['autoload', __CLASS__]);
    }
}