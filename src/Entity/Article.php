<?php
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Article extends DefaultEntity{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $categorie_id;

    /**
     * @var int
     */
    private $user_id;

    /**
     * @var string
     */
    private $picture;

    // /**
    //  * On récupère les données d'un formulaire et on construit notre objet
    //  * C'est le principe de l'hydratation
    //  *
    //  * @param array $data
    //  * @return void
    //  */
    // public function hydratee (array $data)
    // {
    //     if (isset($data["title"])) {
    //         $this->setTitle($data["title"]);
    //     }
    //     if (isset($data["content"])) {
    //         $this->setTitle($data["content"]);
    //     }
    //     if (isset($data["categorieId"])) {
    //         $this->setTitle($data["categorieId"]);
    //     }
    //     if (isset($data["userId"])) {
    //         $this->setTitle($data["userId"]);
    //     }
    //     if (isset($data["picture"])) {
    //         $this->setTitle($data["picture"]);
    //     }
    // }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of categorie_id
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * Set the value of categorie_id
     */
    public function setCategorieId($categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     */
    public function setPicture($picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}