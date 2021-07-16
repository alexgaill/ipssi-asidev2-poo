<?php
namespace Cours;

class Magique {

    private $private = "privée";
    public $prop = "ok";
    private $attributes = [];

    public function __construct()
    {
        echo "<h3>Je construis l'objet! </h3>";
    }

    public function __call($name, $arguments)
    {
        echo "<h3> La méthode $name n'existe pas ou est private</h3>";
    }

    public function __set($nom, $valeur)
    {
        // echo "<h3>La propriété <em>$nom</em> n'existe pas ou est privée, je ne peux pas lui attribuer la valeur <em>$valeur</em></h3>";
        $this->attributes[$nom] = $valeur;
        echo "<h3>La propriété <em>$nom</em> n'existe pas ou est privée, elle a été crée dans la propriété attributes.</h3>";
    }

    public function __get($nom)
    {
        if (isset($this->attributes[$nom])) {

            echo "<h3>La propriété <em>$nom</em> n'existe pas ou est privée mais un propriété <em>$nom</em> a été trouvée dans la propriété attributes et voici sa valeur:</h3>";
            return $this->attributes[$nom];
        } else {
            echo "<h3>La propriété <em>$nom</em> n'existe pas ou est privée et ne peut pas être utilisée directement.</h3>";
        }
    }

    public function __isset($nom)
    {
        return isset($this->attributes[$nom]);
    }

    public function __invoke($text)
    {
        echo "<h3>$text</h3>";
    }

    public function __debugInfo()
    {
        $debug = [];
        foreach ($this as $prop => $value) {
            $debug[$prop] = $value;
        }
        return $debug;
    }

    public function __destruct()
    {
        echo "<h3>Je détruis l'instance</h3>";
    }
}