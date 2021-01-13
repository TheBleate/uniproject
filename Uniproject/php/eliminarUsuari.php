<?php
$db = new Conexio();

function eliminar($idusuari)
{
    $query = 'UPDATE Usuari SET Estat = "inactiu" WHERE idUsuari = "' . $idusuari . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'usuari s'ha eliminat!";
    } else {
        return "No s'han pogut eliminar l'usuari!";
    }
}

?>