<?php
require "MathOperation.php";
require "MaClasse.php";

// On instancie la class MathOperation
// En isntanciant la class, on créé un objet. Cet objet est une instance de la class: une représentation
$mathOperation = new MathOperation();

$numb1 = 4;
$numb2 = 5;

echo $mathOperation->addition($numb1, $numb2);
echo "</br>";

$numb3 = 2;
$numb4 = 12;

echo $mathOperation->addition($numb3, $numb4);
echo "</br>";

$classe = new MaClasse();
var_dump($classe);
echo "</br>";

// On appelle une propriété
echo $classe->proprieteAvecValeur;
echo "</br>";

// On appelle une méthode
echo $classe->methode();
echo "</br>";

// On appelle une méthode avec un paramètre
echo $classe->methodeAvecParam("John");
echo "</br>";

// On appelle une méthode avec un paramètre qui a une valeur par défaut
echo $classe->hello();
echo "</br>";