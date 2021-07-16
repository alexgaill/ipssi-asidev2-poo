<form method="GET">
    <div>
        <label for="title">
            <input type="text" name="title" id="title">
        </label>
    </div>
    <div>
        <label for="content">
            <input type="text" name="content" id="content">
        </label>
    </div>
    <div>
        <label for="categorieId">
            <select name="categorieId" id="categorieId">
                <?php foreach($categories as $categorie): ?>
                    <option value="<?= $categorie->getId() ?>"><?= $categorie->getName() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
    <div>
        <label for="userId">
            <select name="userId" id="userId">
                <?php foreach($users as $user): ?>
                    <option value="<?= $user->getId() ?>"><?= $user->getPseudo() ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </div>
</form>