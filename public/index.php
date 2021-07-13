<?php

use cours\Animals\Chien;

define("ROOT", dirname(__DIR__). "/");

require ROOT. "Core/Autoload/Autoloader.php";
Autoloader::register();

$chien = new Chien("Rex", "gris", 3, "aze");
// include "cours/Revisions/index.php";

var_dump($chien);