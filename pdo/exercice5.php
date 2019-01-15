<!--Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Les afficher comme ceci :

**Nom :** *Nom du client*

**Prénom :** *Prénom du client*

Trier les noms par ordre alphabétique.-->
<!--N'afficher que les clients possédant une carte de fidélité.-->
<?php
include 'model/clientM.php';
include 'controller/exercice5.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des clients dont le nom commence par M</h1>
            <?php foreach ($getClientListByM as $client) { ?>
                <p><strong>Nom : </strong><?= $client->lastName ?></p>
                <p><strong>Prénom : </strong><?= $client->firstName ?></p
            <?php } ?>
        </div>
    </body>
</html>