<?php
 namespace Cours\Introduction;
/**
 * Une class correspond au schema d'un objet
 */
class MaClasse {

    /**
     * Ces deux éléments sont des propriétés c'est à dire les variables d'une class
     */
    public $proprieteSansValeur;
    public $proprieteAvecValeur = "Hello World!";

    /**
     * Une méthode est une fonction présente dans une class
     */
    function methode()
    {
        return $this->proprieteAvecValeur;
    }

    function methodeAvecParam(string $name): string
    {
        return "Hello $name";
    }

    function hello(string $name = "World"): string
    {
        return "Hello $name";
    }
}
/**
 * Pourquoi public devant la propriété
 * Pourquoi $this-> devant l'appel de la propriété
 */