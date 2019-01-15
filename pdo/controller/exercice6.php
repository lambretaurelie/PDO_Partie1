<?php 
//instanciation de l'objet shows.
//$shows devient une instance de la classe titleShow.
//la méthode magique construc est appelée automatiquement grâce au mot clé new.
$shows = new titleShow();
//on appel la méthode grâce a $shows qui se trouve dans ma classe et qui me retourne un tableau stocké dans $showList
$showList = $shows->getTitleShow();
?>

