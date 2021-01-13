<?php
$db = new Conexio();

function eliminar($idInstitut)
{
    $query = 'UPDATE Institut SET Estat = "inactiu" WHERE idInstitut = "' . $idInstitut. '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'institut s'ha eliminat!";
    } else {
        return "No s'ha pogut eliminar l'institut!";
    }
}

?>