<?php

require "cours/Animals/Chien.php";
// Avoir 2 chiens différents;

// On instancie une class avec les paramètres dont elle a besoin pour créer l'objet.
$chien1 = new Chien("Rex", "gris", 3, "chihuahua");
// $chien1->setNom("Rex");
var_dump($chien1);

echo "</br>";

$chien2 = new Chien("Pepper", "brunger", 4, "lévrier");
// $chien2->setNom("Pepper");
var_dump($chien2);

