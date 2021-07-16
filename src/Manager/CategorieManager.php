<?php
namespace App\Manager;

use App\Service\ChangeText;
use App\Service\MEPText;
use Core\Database\Database;
use Core\Manager\DefaultManager;

/**
 * Class Categorie reprenant tout le CRUD des catégories (Create, Read, Update, Delete)
 */
class CategorieManager extends DefaultManager{

    use MEPText, ChangeText {
        ChangeText::upper insteadOf MEPText;
    }

    private $classe = "Categorie";

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Retourne la liste des catégories
     *
     * @return string
     */
    public function getAll ()
    {
        $result = $this->db->getData("SELECT * FROM categorie", $this->classe);
        // var_dump($result);
        $content = "<ul>";
        foreach ($result as $value) {
            $content .= "<li><a href='".$value->getId()."'>".$value->getName()."</a></li>";
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
    public function get (int $id)
    {
        $result = $this->db->getData("SELECT * FROM categorie WHERE id = $id", $this->classe, true);
        if (!$result) {
            $e = new \Exception("Une erreur s'est produite lors de la récupération des données");
            return $e->getMessage();
        } else {
            $content = "<ul>";
            $content .= "<li><a href='".$result->getId()."'>".$result->getName()."</a></li>";
            $content .= "</ul>";
            $this->test();
            echo $this->upper($content);
        }
    }

    /**
     * Enregistre une catégorie dans la BDD
     *
     * @return void
     */
    public function save ()
    {
        $post = [
            "name" => "catégorie POO"
        ];

        $statement = "INSERT INTO categorie (name) VALUES (:name)";

        $this->db->prepare($statement, $post);
    }

    /**
     * Met à jour une catégorie avec les nouvelles données reçues
     *
     * @param integer $id
     * @return void
     */
    public function update (int $id)
    {
        $post = [
            "name" => "catégorie POO mise à jour"
        ];

        $statement = "UPDATE categorie SET name = :name WHERE id = $id";

        $this->db->prepare($statement, $post);
    }

    /**
     * Supprime une catégorie
     *
     * @param integer $id
     * @return void
     */
    public function delete (int $id)
    {
        $statement = "DELETE FROM categorie WHERE id= $id";

        $this->db->prepare($statement);
    }

    public function test()
    {
        parent::test();
        echo "<p>Test de la class</p>";
    }
}