<?php
require "Core/Autoload/Autoload.php";
// use Core\Autoload\Autoload;
use cours\Animals\Chien;
// $autoload = new Autoload;
// // $autoload->chargerClass("cours/Animals/Chien.php");
// function chargerClass($classe)
//     {
//         require "$classe.php";
//     }
// function chargerAnimal($classe)
// {
//     require "cours/Animals/$classe.php";
// }
// // spl_autoload_register("chargerClass");
// spl_autoload_register(["chargerAnimal", "chargerClass"]);

// $racine = new RacineClass;
// var_dump($racine);
// $chien = new Chien("Pepper", "brunger", 4, "lévrier");
// var_dump($chien);

Autoload::register();
$racine = new Chien("Pepper", "brunger", 4, "lévrier");
var_dump($racine);