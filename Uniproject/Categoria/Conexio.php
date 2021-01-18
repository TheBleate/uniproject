<?php

class Conexio{
    private $DB;

    //Getter de la connexió a la Base de Dades

    private $DB_HOST = 'localhost';
    private $DB_USER = 'josep';
    private $DB_PASS = '*Deltebre43580';
    private $DB_NAME = 'Proiectus';

    function __construct(){
        $this->DB = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        session_start();

        //echo $m;
    }

    public function getDB() {
        return $this->DB;
    }

}
?>
