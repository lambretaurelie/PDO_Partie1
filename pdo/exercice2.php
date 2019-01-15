<!--Afficher tous les types de spectacles possibles.-->
<?php
include 'model/showType.php';
include 'controller/exercice2.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des spéctacles</h1>
            <label  for="showType">type : </label>
            <select name="showType" id="showType">
                <?php foreach ($showList as $show) { ?>
                    <option value = "<?= $show->id ?>"><?= $show->type ?></option>
                <?php } ?>
            </select>
        </div>
    </body>
</html>

