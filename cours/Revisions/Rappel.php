<?php

// On créé des objets à partir d'un schéma. Ce schéma est représenté par la class
class Rappel {

    // Une class possède des propriétés qui sont des variables
    public $propriete;

    // Une propriété peut être public: elle est accessible partout sur notre projet
    public $propriete2 = "Hello";

    // Une propriété peut être private: elle n'est utilisable que dans la class où elle a été déclarée
    private $propriete3;

    // Une propriété peut petre protected: elle n'est utilisable que dans la class où elle a été déclarée 
    // et dans les class enfant
    protected $propriete4;

    // Une propriété static est une propriété appartenant à la class.
    // On peut y accéder sans avoir à instancier la class.
    protected static $propStatic;
    
    // Une constante appartient à la class. Elle définit une valeur qui ne peut être modifiée
    // et qui est accessible sans avoir à instancier la class.
    const CONSTANTE = true;


    // Une class a une méthode magique appelée __construct. Le constructeur et automatiquement appelé
    // à l'instanciation de la class
    public function __construct()
    {

    }

    // Une classe possède des méthodes qui sont des fonctions
    public function methode()
    {
        return $this->propriete3;
    }

    // Les class ont des méthodes appelées accesseurs ou getters qui permettent de récupérer la valeur 
    // d'une propriété private
    public function getPropriete ()
    {
        return $this->propriete3;
    }

    // Les class ont des méthodes appelées mutateurs ou setters qui permettent de fournir une valeur 
    // à une propriété private
    public function setPropriete ($prop)
    {
        $this->propriete3 = $prop;
    }

    public static function getStaticProp ()
    {
        return self::$propStatic;
    }
}

// Une class peut étendre d'une autre class. On appelle ça l'héritage
// Cette class accède aux propriétés et méthodes de la class parent
class Rappel2 extends Rappel{

    protected $propriete4 = "prop";

    // Retourne la valeur de la propriété static $propStatic du parent
    public function getStatic()
    {
        return parent::$propStatic;
    }
}

// Pour créer un objet, on instancie la class:
$rappel = new Rappel;

// Rappel::CONSTANTE permet d'accéder à la constante.
// On le fait en utilisant l'opérateur de résolution de portée '::'
Rappel::CONSTANTE;

// Idem pour les méthodes et propriétés static
Rappel::getStaticProp();