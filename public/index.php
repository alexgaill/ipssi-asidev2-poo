<?php

use App\Categorie;
use Cours\Revisions\GlobalPage;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

// require ROOT. "Core/Autoload/Autoloader.php";
// Autoloader::register();

$categorie = new Categorie();
$globalPage = new GlobalPage;

// $categorie->saveCategorie();

echo $globalPage->header();
echo $globalPage->main($categorie->getCategorie(40));
echo $globalPage->footer();