<!--Afficher tous les clients comme ceci :

**Nom :** *Nom de famille du client*

**Prénom :** *Prénom du client*

**Date de naissance :** *Date de naissance du client*

**Carte de fidélité :** *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*

**Numéro de carte :** *Numéro de la carte fidélité du client s'il en possède une.*-->
<?php
include 'model/clientAffiche.php';
include 'controller/exercice7.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des clients</h1>
            <?php foreach ($clientAffiche as $client) { ?>
                <p><strong>Nom de famille du client: </strong><?= $client->lastName ?></p>
                <p><strong>Prénom du client : </strong><?= $client->firstName ?></p>
                <p><strong>Date de naissance du client : </strong><?= $client->birthDate ?></p>
                <p><strong>Carte de fidélité : </strong><?= $client->card ?></p>
                <?php if($client->cardNumber != NULL) : ?>
                <p><strong>Numéro de carte : </strong><?= $client->cardNumber ?></p>
                <?php endif; ?> 
            <?php } ?>
        </div>
    </body>
</html>