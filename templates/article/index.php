<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Liste des articles</h1>

        <ul>
            <?php foreach( $articles as $article): ?>
                <li><a href="public/index.php?page=getArticle&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></li>
            <?php endforeach ?>
        </ul>
</body>
</html>