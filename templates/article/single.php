<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $article->getTitle() ?></h1>
    <?php if (is_null($article->getPicture())): ?>
        <img src="https://fakeimg.pl/150x150" alt="">
    <?php else: ?>
    <?php endif; ?>

    <img src="" alt="">
    <p><?= $article->getContent() ?></p>

    <small>Cet article est rédigé par <?= $article->getUserId() ?></small>
    <small>Categorie: <a href="public/index.php?page=getCategorie&id=<?= $article->getCategorieId() ?>"><?= $article->getCategorieId() ?></a></small>
</body>
</html>