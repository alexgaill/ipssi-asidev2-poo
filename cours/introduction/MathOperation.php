<?php 
 namespace Cours\Introduction;

use Exceptions\MathException;

/**
 * Une class a toujours sa première lettre en majuscule
 * Le fichier qui contient la class a le même nom que la class
 */
class MathOperation {

    function addition ($numb1, $numb2): int
    {
        if (is_int($numb1) && is_int($numb2)) {
            return $numb1 + $numb2;
        } else {
            throw new MathException;
            
        }
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

    public function additionner ()
    {
        try {
           return $this->addition("chien", "chat");
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }

}
