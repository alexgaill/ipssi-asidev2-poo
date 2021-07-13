<?php

require_once "Animals/Mammifere.php";
require_once "Animals/Chien.php";
require_once "Animals/Chat.php";

// // Avoir 2 chiens différents;

// // On instancie une class avec les paramètres dont elle a besoin pour créer l'objet.
// $chien1 = new Chien("Rex", "gris", 3, "chihuahua");
// // $chien1->setNom("Rex");
// var_dump($chien1);
// echo "</br>";
// echo $chien1->getNom();
// echo "</br>";

// echo $chien1->getCategorie();
// echo "</br>";

// var_dump($chien1->setNom("Rexou"));

// // echo "</br>";

// $chien2 = new Chien("Pepper", "brunger", 4, "lévrier");
// // $chien2->setNom("Pepper");
// var_dump($chien2);

// echo "</br>";
// //On instancie 2 chats Felix 5 ans blanc et noir européen et Croquette siamois 4 ans blanc 
// $felix = new Chat("Felix", "blanc & noir", 5, "européen");
// var_dump($felix);
// echo "</br>";
// $croquette = new Chat("Croquette", "blanc", 4, "siamois");
// var_dump($croquette);
// echo "</br>";

// Au global, on fait référence à une constante en appelant la class avec l'opérateur ::
// Nous n'avons pas besoin d'instancier un objet pour utiliser cette constante
// echo Mammifere::CATEGORIE;

$chien = new Chien("Pepper", "brunger", 4, "lévrier");
echo Chien::cours();
echo "</br>";
echo $chien->cours();
echo "</br>";
echo "</br>";

Chien::$surnom = "Rexou";
echo Chien::cours();
echo "</br>";
echo $chien->cours();
echo "</br>";
var_dump($chien);
