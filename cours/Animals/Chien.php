<?php

class Chien {

    public $nom;
    public $pelage;
    public $age;
    public $race;
    public $cri = "aboiement";

    /**
     * Le constructeur est une méthode qui s'appelle à l'instanciation d'une class.
     * Elle demande à recevoir des paramètres obtenus lors de cette instanciation.
     * Elle permet ainsi de donner des valeurs à toutes les propriétés que va contenir notre objet.
     *
     * @param string $nom
     * @param string $pelage
     * @param integer $age
     * @param string $race
     */
    function __construct (string $nom, string $pelage, int $age, string $race)
    {
        $this->nom = $nom;
        $this->pelage = $pelage;
        $this->age = $age;
        $this->race = $race;
    }
    
    function setNom($nom)
    {
        $this->nom = $nom;
    }
}