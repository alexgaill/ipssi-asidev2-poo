<?php

class Mammifere {
    /**
     * Une propriété public est accessible partout (on peut l'appeler directement après avoir instancié la class)
     * Une propriété private n'est utilisable que dans la class où elle est déclarée.
     * Si on veut l'utiliser, il faut mettre en place des méthodes spécifiques
     */
    private $nom;
    private $pelage;
    private $age;
    private $race;
    protected $cri;

    // On définie une constante. La valeur ne change pas.
    // Une constante est une propriété non pas rattachée à l'objet mais à la class
    const CATEGORIE = "mammifère";
    const TEST = "toto";

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
    public function __construct (string $nom, string $pelage, int $age, string $race)
    {
        $this->nom = $nom;
        $this->pelage = $pelage;
        $this->age = $age;
        $this->race = $race;
    }
    
    /**
     * Cette méthode est un accesseur ou un getter. Il permet d'accéder à l'information et de la lire
     *
     * @return void
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Cette méthode est un mutateur ou un setter. Il permet d'accéder à l'information et de la modifier
     *
     * @param string $nom
     * @return Chien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of pelage
     */
    public function getPelage()
    {
        return $this->pelage;
    }

    /**
     * Set the value of pelage
     */
    public function setPelage($pelage): self
    {
        $this->pelage = $pelage;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of cri
     */
    public function getCri()
    {
        return $this->cri;
    }

    /**
     * Set the value of cri
     */
    public function setCri($cri): self
    {
        $this->cri = $cri;

        return $this;
    }

    public function getCategorie ()
    {
        // Pour appeler une constante depuis la class où elle est crée, 
        // on doit faire référence à cette class et utilisé l'opérateur de résolution de portée '::'
        return self::CATEGORIE;
    }
}