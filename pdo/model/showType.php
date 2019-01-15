<?php

class showTypes {

    public $id = 0;
    public $type = '';
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
     * la méthode sert a récupérer la liste des spéctacles 
     * @return array
     */
    public function getShowList() {
        $query = 'SELECT * FROM `showTypes`';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

}
?>



