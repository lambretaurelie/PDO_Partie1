<?php 
//instanciation de l'objet client.
//$client devient une instance de la classe client.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$clients = new clients();
//on appel la méthode grâce a $client qui se trouve dans ma classe et qui me retourne un tableau stocké dans $clientList
$clientList = $clients->getClientList();
?>

