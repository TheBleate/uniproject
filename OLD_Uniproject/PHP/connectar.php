<?php

class Connectar {
    function __construct(){}


    public function con(){
        /*Connexió a la bd, per ordre van, IP del servidor, nom usuari, contrasenya i la base a la que treballa */
        $link = mysqli_connect("localhost", "root", "alumne", "Sprint2");
        // Comprovar la connexió, si no pot connectar-se donara error
        if (!$link) {
            die("ERROR: No s'ha pogut connectar amb la base de dades. " . mysqli_connect_error());
        }
        return $link;
    }
	}
?>