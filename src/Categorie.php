<?php
namespace App;

use Core\Database\Database;

class Categorie {

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Retourne la liste des catégories
     *
     * @return string
     */
    public function getCategories ()
    {
        $result = $this->db->getData("SELECT * FROM categorie");

        $content = "<ul>";
        foreach ($result as $value) {
            $content .= "<li><a href='$value->id'>$value->name</a></li>";
        }
        $content .= "</ul>";

        return $content;
    }

    /**
     * Retourne une catégorie en fonction de son id
     *
     * @param integer $id
     * @return string
     */
    public function getCategorie (int $id)
    {
        $result = $this->db->getData("SELECT * FROM categorie WHERE id = $id", true);
        if (!$result) {
            $e = new \Exception("Une erreur s'est produite lors de la récupération des données");
            return $e->getMessage();
        } else {
            $content = "<ul>";
            $content .= "<li><a href='$result->id'>$result->name</a></li>";
            $content .= "</ul>";
            
            return $content;
        }
    }

    public function saveCategorie ()
    {
        $post = [
            "name" => "catégorie POO"
        ];

        $statement = "INSERT INTO categorie (name) VALUES (:name)";

        $this->db->prepare($statement, $post);
    }
}