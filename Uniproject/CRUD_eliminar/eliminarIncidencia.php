<?php
$db = new Conexio();

function eliminar($idIncidencia)
{
    $query = 'UPDATE Incidencia SET Estat = "inactiu" WHERE idIncidencia = "' . $idIncidencia . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'incidencia s'ha eliminat!";
    } else {
        return "No s'ha pogut eliminar l'incidencia!";
    }
}

?>