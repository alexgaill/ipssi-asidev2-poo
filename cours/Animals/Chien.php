<?php
namespace cours\Animals;

use cours\Animals\Mammifere;
// require_once "Mammifere.php";

class Chien extends Mammifere{

    protected $cri = "aboiement";

    public static $surnom = "Toto";

    public function getCat ()
    {
        // On accède à la constante du parent en y faisant référence grâce au mot-clé "parent"
        return parent::CATEGORIE;
    }

    public static function cours()
    {
        return self::$surnom . " se met à courir";
    }
}