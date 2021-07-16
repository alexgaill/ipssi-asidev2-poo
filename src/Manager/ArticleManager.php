<?php
namespace App\Manager;

use App\Entity\Article;
use Core\Database\Database;
use Core\Manager\DefaultManager;

class ArticleManager extends DefaultManager{

    private $classe = "Article";

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll ()
    {
        $statement = "SELECT * FROM article";
        $articles = $this->db->getData($statement, $this->classe);

        $this->render("article/index", [
            "articles" => $articles
        ]);
    }

    public function get(int $id)
    {
        $statement = "SELECT * FROM article WHERE id = $id";
        
        $article = $this->db->getData($statement, $this->classe, true);
        if (!$article) {
            $e = new \Exception("Une erreur s'est produite lors de la récupération des données");
            return $e->getMessage();
        } else {
           
            include ROOT. "templates/article/single.php";
        }
    }

    public function save ()
    {
        $post = [
            "title" => "Lorem Ipseum Dolor Sit Amet",
            "content" => "Lorem Ipseum Dolor Sit Amet Consecitur Lorem Ipseum Dolor Sit Amet",
            "categorieId" => 35,
            "userId" => 2
        ];

        $article = new Article($post);
        var_dump($article);

        $statement = "INSERT INTO article (title, content, categorie_id, user_id, picture) VALUES (:title, :content, :categorie_id, :user_id, :picture)";

        $prep = $this->db->getPDO()->prepare($statement);
        $prep->bindValue(':title', $article->getTitle());
        $prep->bindValue(':content', $article->getContent());
        $prep->bindValue(':categorie_id', $article->getCategorieId());
        $prep->bindValue(':user_id', $article->getUserId());
        $prep->bindValue(':picture', $article->getPicture());

        $prep->execute();
    }

    public function update (int $id)
    {
        $post = [
            "title" => "Lorem Ipseum Dolor Sit Amet",
            "content" => "Lorem Ipseum Dolor Sit Amet Consecitur Lorem Ipseum Dolor Sit Amet",
            "categorie_id" => 35,
            "user_id" => 2
        ];

        $statement = "UPDATE article SET (
            title= :title,
            content= :content,
            categorie_id= :categorie_id,
            user_id = :user_id
            WHERE id = $id
        )";

        $this->db->prepare($statement, $post);
    }

    public function delete(int $id)
    {
        $statement = "DELETE FROM article WHERE id = $id";

        $this->db->prepare($statement);
    }
}