<?php
class Institut {
  private $DB;
  public function alta($idinstitut, $nom, $localitat, $adreça, $telefon, $cif, $email) {
    $query = 'INSERT INTO Institut(idInstitut, Nom, Localitat, Adreça, Telefon, CIF, Email) VALUES '. "(". '"' . $idinstitut . '","' . $nom . '","' . $localitat .  '","' . $adreça .  '","' . $telefon . '","' . $cif . '","' . $email .'");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Empresa afegida!";
      } else {
          return "No s'han pogut afegir la Empresa!";
      }
    }
    function eliminar($idInstitut) {
        $query = 'UPDATE Institut SET Estat = "inactiu" WHERE idInstitut = "' . $idInstitut. '"';
        $query = $this->DB->query($query);
        if ($query === true) {
            return "L'institut s'ha eliminat!";
        } else {
            return "No s'ha pogut eliminar l'institut!";
        }
    }
    public function llistar() {
      $query = 'SELECT nom, direccio, localitat, Estat FROM Usuari WHERE Tipus = "institut";';
      $query = $this->DB->query($query);
      if ($query) {
          echo '<table border="1" frame="void" rules="cols">
                  <thead>
                      <tr>
                          <th>nom</th>
                          <th>direccio</th>
                          <th>localitat</th>
                          <!--  <th>Estat</th> -->
                          <td><a href="./crudusuaris.php?action=0&type=0"><i class="fas fa-plus"></i></a></td>
                      </tr>
                  </thead>
                  <tbody>';
          foreach ($query as $row) {
            if($row['Estat'] === 'actiu') {
                echo '<tr>
                        <td>'. $row['nom'] .'</td>
                        <td>'. $row['direccio'] .'</td>
                        <td>'. $row['localitat'] .'</td>
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

  function modificar($idUsuari, $idInstitut, $nom, $localitat, $adreça, $telefon, $cif, $email) {
      $query = 'UPDATE Usuari SET idInstitut ="'. $idInstitut. '", Nom = "'. $nom . '" , Localitat = "'. $localitat .'", Adreça = "'. $adreça .'", Telefon = "'.$telefon.'", CIF = "'. $cif. '" Email = "'.$email .'" WHERE idUsuari ="'.$idusuari.'";';
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
