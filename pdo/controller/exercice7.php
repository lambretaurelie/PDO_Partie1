<?php 
//instanciation de l'objet client.
//$clients devient une instance de la classe clientAffiche.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$clients = new clientAffiche();
//on appel la méthode grâce a $clients qui se trouve dans ma classe et qui me retourne un tableau stocké dans $clientAffiche
$clientAffiche = $clients->getClientAffiche();
?>

