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
        echo "xxxxxxxxxxxxxxxx;";
      $query = 'SELECT idInstitut, Nom, Localitat, Adreça, Telefon, CIF, Email, estat FROM Institut;';

      $query = $this->DB->query($query);
      echo "yyyyyyyyyyyyyyyyyy;";
      var_dump($query);

      if ($query) {
          //var_dump($query);

          echo "sss;";
          echo '<table border="1" frame="void" rules="cols">
                  <thead>
                      <tr>
                          <th>Nom</th>
                          <th>Localitat</th>
                          <th>Adreça</th>
                          <th>Telefon</th>
                          <th>CIF</th>
                          <th>Email</th>
                          <td class="align-middle text-center" ><a href="#!" class="modal-trigger" data-crudaction="1" ><i class="fa fa-plus"></i></a></td>
                      </tr>
                  </thead>
                  <tbody>';
          foreach ($query as $row) {
            if($row['Estat'] === 'actiu') {
                echo '<tr>
                        <td>'. $row['Nom'] .'</td>
                        <td>'. $row['Localitat'] .'</td>
                        <td>'. $row['Adreça'] .'</td>
                        <td>'. $row['Telefon'] .'</td>
                        <td>'. $row['CIF'] .'</td>
                        <td>'. $row['Email'] .'</td>
                        <td class="align-middle">
                            <div class="d-flex">
                                <a href="#!" class="modal-trigger pr-1" data-crudaction="2" data-crudtarget="'. $row['idInstitut']. '"><i class="fa fa-pencil"></i></a>
                                <a href="#!" class="modal-trigger" data-crudaction="3" data-crudtarget="'. $row['idInstitut']. '"><i class="fa fa-trash"></i></a>
                            <div>
                        </td>
                </tr>';
            }
          }
          echo '    </tbody>
                </table>';
      }
  }

  function modificar($idInstitut, $nom, $localitat, $adreça, $telefon, $cif, $email) {
      $query = 'UPDATE Institut SET idInstitut ="'. $idInstitut. '", Nom = "'. $nom . '" , Localitat = "'. $localitat .'", Adreça = "'. $adreça .'", Telefon = "'.$telefon.'", CIF = "'. $cif. '" Email = "'.$email .'" WHERE idInstitut ="'.$idInstitut.'";';
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
