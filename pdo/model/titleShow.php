<?php

class titleShow {

    public $title = '';
    public $performer = '';
    public $date = '00/00/0000';
    public $startTime = '00:00:00';
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
    public function getTitleShow() {
        $query = 'SELECT `title`,`performer`,DATE_FORMAT(`date`,\'%e/%m/%Y\') AS `date`,`startTime` FROM `shows` ORDER BY `title`';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

}
?>

