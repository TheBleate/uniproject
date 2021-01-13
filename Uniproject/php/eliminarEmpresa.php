<?php
$db = new Conexio();

function eliminar($idEmpresa)
{
    $query = 'UPDATE Empresa SET Estat = "inactiu" WHERE idEmpresa = "' . $idEmpresa . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'empresa s'ha eliminat!";
    } else {
        return "No s'ha pogut eliminar l'empresa!";
    }
}

?>