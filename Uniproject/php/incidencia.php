<?php
class Incidencia {
  private $DB;

  public function llistar() {
    $query = 'SELECT nom, descripcio, registreData, Estat FROM Usuari WHERE Tipus = "incidencia";';

    $query = $this->DB->query($query);

    if ($query) {
        echo '<table border="1" frame="void" rules="cols">
                <thead>
                    <tr>
                        <th>nom</th>
                        <th>descripcio</th>
                        <th>registreData</th>
                        <!--  <th>Estat</th> -->
                        <td><a href="./crudusuaris.php?action=0&type=0"><i class="fas fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';

        foreach ($query as $row) {
          if($row['Estat'] === 'actiu') {
              echo '<tr>
                      <td>'. $row['nom'] .'</td>
                      <td>'. $row['descripcio'] .'</td>
                      <td>'. $row['registreData'] .'</td>
                      <!--  <td>'. $row['Estat'] .'</td> -->
                      <td>
                          <div class="table-icons">
                              <a href="./crudusuaris.php?uid='. $row['idUsuari']. '&action=1&type=0"><i class="fas fa-edit"></i></a>
                              <a href="./crudusuaris.php?uid='. $row['idUsuari']. '&action=2&type=0"><i class="fas fa-trash-alt"></i></a>
                          <div>
                      </td>
                  </tr>';
          }
        }
        echo '    </tbody>
              </table>';
    }
  }
  public function alta($idIncidencia, $idUsuari, $estat, $nom, $descripcio, $registreData) {
    $query = 'INSERT INTO Incidencia(idIncidencia, idUsuari, Estat, Nom, Descripcio, registreData) VALUES '. "(". '"' . $idIncidencia . '","' . $idUsuari . '","' . $estat . '","' . $nom . '","' . $descripcio . '","' . $registreData .'");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Incidencia afegida!";
    } else {
      return "No s'han pogut afegir la Incidencia!";
    }
  }

  function eliminar($idIncidencia) {
    $query = 'UPDATE Incidencia SET Estat = "inactiu" WHERE idIncidencia = "' . $idIncidencia . '"';
    $query = $this->DB->query($query);
    if ($query === true) {
        return "L'incidencia s'ha eliminat!";
    } else {
        return "No s'ha pogut eliminar l'incidencia!";
    }
}
function modificar($idIncidencia, $estat, $nom, $descripcio, $registreData) {
    $query = 'UPDATE Incidencia SET Nom = "'. $nom . '" , Estat = "'. $estat .'", Descripcio = "'. $descripcio .'", registreData = "'.$registreData.'" WHERE idIncidencia = "'. $idIncidencia .'";';
    $query = $this->DB->query($query);
    if ($query === ture) {
        return "Canvis aplicats!";
    }else {
        return "No s'han pogut aplicar els canvis!";
    }
}
  function __construct($DB) {
      $this->DB = $DB;
  }
}
 ?>
