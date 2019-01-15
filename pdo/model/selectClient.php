<?php

class selectClient {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '00/00/0000';
    public $card = false;
    public $cardNumber = NULL;
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
     * la méthode sert a récupérer la liste des clients 
     * @return array
     */
    public function getClientListWhithCard() {
        $query = 'SELECT `id`,`lastName`,`firstName`,DATE_FORMAT(`birthDate`,\'%e/%m/%Y\') AS `birthDate`,`card`,`cardNumber` FROM `clients`WHERE card !=0';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
?>






