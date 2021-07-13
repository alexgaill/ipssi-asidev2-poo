<?php 
 namespace Cours\Introduction;

/**
 * Une class a toujours sa première lettre en majuscule
 * Le fichier qui contient la class a le même nom que la class
 */
class MathOperation {

    function addition (int $numb1, int $numb2): int
    {
        return $numb1 + $numb2;
    }
    function soustraction(int $numb1, int $numb2): int
    {
        return $numb1 - $numb2;
    }
    function multiplication(int $numb1, int $numb2): int
    {
        return $numb1 * $numb2;
    }
    function division(int $numb1, int $numb2): int
    {
        return $numb1 / $numb2;
    }

}
