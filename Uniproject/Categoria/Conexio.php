<?php

class Conexio extends mysqli{

    private $DB_HOST = '192.168.224.101';
    private $DB_USER = 'Josep';
    private $DB_PASS = '1234';
    private $DB_NAME = 'Proiectus';

    public function __construct(){
        parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        $this->set_charset('utf-8');

        $this->connect_errno ? die('Error en la conexion'. mysqli_connect_errno()) : $m = 'Conectat';

        //echo $m;
    }


}
?>