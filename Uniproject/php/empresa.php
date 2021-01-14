<?php
class Empresa {
  private $DB;
  public function alta($idempresa, $nom, $localitat, $adreça, $telefon, $cif, $email) {
    $query = 'INSERT INTO Empresa(idEmpresa, Nom, Localitat, Adreça, Telefon, CIF, Email) VALUES '. "(". '"' . $idempresa . '","' . $nom . '","' . $localitat .  '","' . $adreça .  '","' . $telefon . '","' . $cif . '","' . $email .'");';

    $query = $this->DB->query($query);
    if ($query === true) {
          return "Empresa afegida!";
      } else {
          return "No s'han pogut afegir la Empresa!";
      }
    }
  function __construct($DB) {
      $this->DB = $DB;
  }
  function eliminar($idEmpresa) {
      $query = 'UPDATE Empresa SET Estat = "inactiu" WHERE idEmpresa = "' . $idEmpresa . '"';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "L'empresa s'ha eliminat!";
      } else {
          return "No s'ha pogut eliminar l'empresa!";
      }
  }
  public function llistar() {
    $query = 'SELECT nom, localitat, telefon, email, Estat FROM Usuari WHERE Tipus = "empresa";';

    $query = $this->DB->query($query);

    if ($query) {
        echo '<table border="1" frame="void" rules="cols">
                <thead>
                    <tr>
                        <th>nom</th>
                        <th>localitat</th>
                        <th>telefon</th>
                        <th>email</th>
                        <!--  <th>Estat</th> -->
                        <td><a href="./crudusuaris.php?action=0&type=0"><i class="fas fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';

        foreach ($query as $row) {
          if($row['Estat'] === 'actiu') {
              echo '<tr>
                      <td>'. $row['nom'] .'</td>
                      <td>'. $row['localitat'] .'</td>
                      <td>'. $row['telefon'] .'</td>
                      <td>'. $row['email'] .'</td>
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
  function modificar($idEmpresa, $nom, $localitat, $adreça, $telefon, $cifm, $email) {
      $query = 'UPDATE Empresa SET Nom = "'. $nom . '" , Localitat = "'. $localitat .'", Adreça = "'. $adreça .'", Telefon = "'.$telefon.'", CIF = "'. $cif. '" Email = "'.$email .'" WHERE idEmpresa ="'.$idEmpresa.'";';
      $query = $this->DB->query($query);
      if ($query === ture) {
          return "Canvis aplicats!";
      }else {
          return "No s'han pogut aplicar els canvis!";
      }
  }
}
 ?>
