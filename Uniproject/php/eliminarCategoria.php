<?php
$db = new Conexio();

function eliminar($idCategoria)
{
    $query = 'UPDATE Categoria SET Estat = "inactiu" WHERE idIncidencia = "' . $idCategoria . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "La categoria s'ha eliminat!";
    } else {
        return "No s'ha pogut eliminar la categoria!";
    }
}

?>