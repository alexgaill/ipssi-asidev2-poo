<?php

use Cours\Magique;
use App\Manager\ArticleManager;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";


if (!empty($_GET) && isset($_GET["method"])) {
    if ($_GET["method"] === "getArticles") {
        $manager = new ArticleManager;
        $manager->getArticles();
    } else if ($_GET["method"] === "getArticle" && isset($_GET["id"])) {
        $manager = new ArticleManager;
        $manager->getArticle($_GET["id"]);
    } else if ($_GET["method"] === "magique") {
        $classe = new Magique;
        $classe->propAjoutee  = "coucou";
        echo $classe->propAjoutee;
        if (isset($classe->prop)) {
            echo "<p> Prop existe </p>";
        }
        if (isset($classe->propAjoutee)) {
            echo "La propriété existe!";
        }
        $classe->test();
        echo $classe->prop;

        $classe("je suis invoké");

        var_dump($classe);
    }
}
