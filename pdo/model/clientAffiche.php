<?php

class clientAffiche {

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
    public function getClientAffiche() {
        $query = 'SELECT `id`,`lastName`,`firstName`,DATE_FORMAT(`birthDate`,\'%e/%m/%Y\') AS `birthDate`,`cardNumber`, CASE WHEN card THEN \'OUI\' ELSE \'NON\' END AS `card` FROM `clients`';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

}
?>


