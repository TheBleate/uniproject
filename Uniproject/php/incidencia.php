<?php
class Incidencia {
  private $DB;

  public function llistar($idUsuari) {
    $query = 'SELECT idIncidencia, estatIncidencia, Nom, Descripcio, registreData, estat FROM Incidencia;';

    $query = $this->DB->query($query);

    if ($query) {
        echo '<table border="1" frame="void" rules="cols">
                <thead>
                    <tr>
                        <th>Estat Incidencia</th>
                        <th>Nom</th>
                        <th>Descripcio</th>
                        <th>registre Data</th>

                        <td class="align-middle text-center"><a href="#!" class="modal-trigger" data-crudaction="1" data-crudtarget="'. $idUsuari.'" ><i class="fa fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';

        foreach ($query as $row) {
          if($row['estat'] === 'actiu') {
              echo '<tr>
                      <td>'. $row['estatIncidencia'] .'</td>
                      <td>'. $row['Nom'] .'</td>
                      <td>'. $row['Descripcio'] .'</td>
                      <td>'. $row['registreData'] .'</td>
                      <td class="align-middle">
                          <div class="d-flex">
                            <a href="#!" class="modal-trigger pr-1" data-crudaction="2" data-crudtarget="'. $row['idIncidencia']. '"><i class="fa fa-pencil"></i></a>
                            <a href="#!" class="modal-trigger" data-crudaction="3" data-crudtarget="'. $row['idIncidencia']. '"><i class="fa fa-trash"></i></a>
                          <div>
                      </td>
                  </tr>';
          }
        }
        echo '    </tbody>
              </table>';
    }
  }
  public function alta($idUsuari, $nom, $descripcio) {
    $query = 'INSERT INTO Incidencia(idUsuari, estatIncidencia, Nom, Descripcio) VALUES '. "(". '"' . $idUsuari . '", "Enviat","' . $nom . '","' . $descripcio . '");';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "Incidencia afegida!";
    } else {
        return "ERROR: No s'han pogut afegir la Incidencia!";
    }
  }

  function eliminar($idIncidencia) {
    $query = 'UPDATE Incidencia SET Estat = "inactiu" WHERE idIncidencia = "' . $idIncidencia . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'incidencia s'ha eliminat!";
    } else {
        return "ERROR: No s'ha pogut eliminar l'incidencia!";
    }
}
function modificar($idIncidencia, $estat, $nom, $descripcio, $registreData) {
    $query = 'UPDATE Incidencia SET Nom = "'. $nom . '" , Estat = "'. $estat .'", Descripcio = "'. $descripcio .'", registreData = "'.$registreData.'" WHERE idIncidencia = "'. $idIncidencia .'";';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "Canvis aplicats!";
    }else {
        return "ERROR: No s'han pogut aplicar els canvis!";
    }
}
  function __construct($DB) {
      $this->DB = $DB;
  }
}
 ?>
