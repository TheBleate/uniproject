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
    $query = 'SELECT idEmpresa, Nom, Localitat, Adreça, Telefon, CIF, Email, estat FROM Empresa';

    $query = $this->DB->query($query);

    if ($query) {
        echo '<table border="1" frame="void" rules="cols">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Localitat</th>
                        <th>Adreça</th>
                        <th>Telefon</th>
                        <th>CIF</th>
                        <th>Email</th>
                        <td class="align-middle text-center"><a href="#!" class="modal-trigger" data-crudaction="1" ><i class="fa fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';

        foreach ($query as $row) {
          if($row['estat'] === 'actiu') {
              echo '<tr>
                      <td>'. $row['Nom'] .'</td>
                      <td>'. $row['Localitat'] .'</td>
                      <td>'. $row['Adreça'] .'</td>
                      <td>'. $row['Telefon'] .'</td>
                      <td>'. $row['CIF'] .'</td>
                      <td>'. $row['Email'] .'</td>
                      <td class="align-middle">
                          <div class="d-flex">
                              <a href="#!" class="modal-trigger pr-1" data-crudaction="2" data-crudtarget="'. $row['idEmpresa']. '"><i class="fa fa-pencil"></i></a>
                              <a href="#!" class="modal-trigger" data-crudaction="3" data-crudtarget="'. $row['idEmpresa']. '"><i class="fa fa-trash"></i></a>
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
      if ($query === true) {
          return "Canvis aplicats!";
      }else {
          return "No s'han pogut aplicar els canvis!";
      }
  }
}
 ?>
