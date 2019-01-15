<!--Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. 
Afficher les résultat comme ceci : *Spectacle* par *artiste*, le *date* à *heure*.-->
<?php
include 'model/titleShow.php';
include 'controller/exercice6.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des spéctacles</h1>

            <?php foreach ($showList as $show) { ?>
            <p><strong>Spectacle : </strong><?= $show->performer ?><strong> Par : </strong><?= $show->title ?><strong> le : </strong><?= $show->date ?><strong> à : </strong><?= $show->startTime ?></p>
            <?php } ?>
        </div>
    </body>
</html>
