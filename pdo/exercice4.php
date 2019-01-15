<!--N'afficher que les clients possédant une carte de fidélité.-->
<?php
include 'model/selectClient.php';
include 'controller/exercice4.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des clients ayant une carte de fidélité</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Carte de fidélité</th>
                        <th>Numéro de carte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientListWhithCard as $client) { ?>
                        <tr>
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