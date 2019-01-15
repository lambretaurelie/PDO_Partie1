<?php 
//instanciation de l'objet spectacle.
//$shows devient une instance de la classe showTypes.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$shows = new showTypes();
//on appel la méthode grâce a $$shows qui se trouve dans ma classe et qui me retourne un tableau stocké dans $showsList
$showList = $shows->getShowList();
?>


