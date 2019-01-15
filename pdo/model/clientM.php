<?php

class clientM {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    private $db;

    public function __construct() {
        //protection contre l'erreur
        //si il n'y a pas d'erreur
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'lambret', 'GORDONroxie');
            //si il y a une erreur
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    /**
     * la méthode sert a récupérer la liste des clients dont le nom commence par M
     * @return array
     */
    public function getClientListByM() {
        $query = 'SELECT `lastName`,`firstName` FROM `clients` WHERE `lastName` LIKE \'m%\' ORDER BY `lastName` ASC';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
?>







