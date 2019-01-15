<!--Afficher tous les clients.-->
<?php
include 'model/client.php';
include 'controller/exercice1.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des clients</h1>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Carte de fidélité</th>
                        <th>Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientList as $client) { ?>
                        <tr>
                            <td><?= $client->id ?></td>
                            <td><?= $client->lastName ?></td>
                            <td><?= $client->firstName ?></td>
                            <td><?= $client->birthDate ?></td>
                            <td><?= $client->card ?></td>
                            <td><?= $client->cardNumber ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>