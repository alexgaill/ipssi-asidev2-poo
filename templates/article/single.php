<h1><?= $article->getTitle() ?></h1>
<?php if (is_null($article->getPicture())): ?>
    <img src="https://fakeimg.pl/150x150" alt="">
<?php else: ?>
<?php endif; ?>

<img src="" alt="">
<p><?= $article->getContent() ?></p>

<small>Cet article est rédigé par <?= $article->getUserId() ?></small>
<small>Categorie: <a href="public/index.php?page=getCategorie&id=<?= $article->getCategorieId() ?>"><?= $article->getCategorieId() ?></a></small>