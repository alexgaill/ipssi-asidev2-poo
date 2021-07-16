<h1>Liste des articles</h1>

<ul>
    <?php foreach( $articles as $article): ?>
        <li><a href="public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></li>
    <?php endforeach ?>
</ul>