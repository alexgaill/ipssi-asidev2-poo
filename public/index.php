<?php

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";
use Cours\Animals\Chien;


// require ROOT. "Core/Autoload/Autoloader.php";
// Autoloader::register();

$chien = new Chien("Rex", "gris", 3, "aze");

var_dump($chien);