<?php

use App\Manager\ArticleManager;
use App\Manager\CategorieManager;
use Cours\Revisions\GlobalPage;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

// require ROOT. "Core/Autoload/Autoloader.php";
// Autoloader::register();

$categorie = new CategorieManager();
$globalPage = new GlobalPage;

// $categorie->saveCategorie();

// echo $globalPage->header();
// echo $globalPage->main($categorie->getCategories());
// echo $globalPage->footer();

$article = new ArticleManager();
$article->saveArticle();

