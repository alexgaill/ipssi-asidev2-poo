<?php


use Cours\Magique;
use App\Manager\ArticleManager;
use Cours\CloneWars;

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
    } else if ($_GET["method"] === "clone") {
        $obj1 = new CloneWars;
        // Dire qu'une variable est égale à une autre variable contenant un objet revient à copier cette objet
        // entièrement. Même l'identifiant de l'objet est copié.
        $obj2 = $obj1;
        
        $obj1->prop1 = "Hello";
        // Cloner un objet revient à avoir 2 objets ayant eu les même traitement d'informations mais avec un id différent
        $obj3 = clone $obj1;
        $obj4 = clone $obj1;
        var_dump( $obj1);
        echo "<br>";
        $obj2->prop2 = "World";
        var_dump($obj2);
        echo "<br>";
        // Si on traite les informations sur $obj1 ou $obj2, ce sont ces 2 objets qui sont modifiés en même temps
        var_dump( $obj1);
        echo "<br>";
        var_dump($obj3);
        echo "<br>";
        echo "<br>";
        echo "nombre d'instances: ". CloneWars::getInstances();
        echo "<br>";
        
        if ($obj1 === $obj2) {
            echo "obj1 et obj2 sont strictement identiques";
        } else if ($obj1 == $obj2) {
            echo "obj1 et obj2 sont identiques mais pas strictement identiques";
        }
        echo "<br>";
        if ($obj4 === $obj3) {
            echo "obj3 et obj4 sont strictement identiques";
        } else if ($obj4 == $obj3) {
            echo "obj3 et obj4 sont identiques mais pas strictement identiques";
        }
        echo "<br>";
        echo "<br>";
        
        
        
        class A {
            public $propA;
            public $propB;
        }
        class B {
            public $propA;
            public $propB;
        }
        
        $a = new A;
        $b = new B;
        $c = new A;
        
        if ($a == $b) {
            echo "a=b";
        } else {
            echo "a!=b";
        }
        echo "<br>";
        if ($a == $c) {
            echo "a=c";
        } else {
            echo "a!=c";
        }
    }
}