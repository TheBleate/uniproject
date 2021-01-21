<?php
class Usuari {
    private $DB;
    //muhco texto
    //alta Usuaris
    public function alta($idRol, $nom, $cognom, $segonCognom, $dni, $username, $password, $tipus, $email, $telefon, $dataNaixement) {
        $query = 'INSERT INTO Usuari(idRol, Nom, Cognom, SegonCognom, DNI, UserName, Password, Tipus, Email, Telefon, DataNaixement, Estat) VALUES '. "(". '"' . $idRol . '","' . $nom . '","' . $cognom . '","' . $segonCognom . '","' . $dni . '","' . $username . '","' . $password . '","' . $tipus . '","' . $email . '","' . $telefon . '","' . $dataNaixement . '","actiu");';

        $query = $this->DB->query($query);
        if ($query === true) {
            return "Usuari afegit!";
        } else {
            return "No s'han pogut afegir l'usuari!";
        }
    }

    //Mostrar Usuaris
    public function llistar() {
        $query = 'SELECT idUsuari, idRol, Nom, Cognom, SegonCognom, DNI, UserName, Password, Tipus, Email, Telefon, DataNaixement, Estat FROM Usuari;';

        $query = $this->DB->query($query);

        if ($query) {
            echo '<table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>DNI</th>
                            <th>UserName</th>
                            <th>Password</th>
                            <th>Tipus</th>
                            <!--<th>Email</th> -->
                            <th>Telefon</th>
                            <th>DataNaixement</th>
                            <td class="align-middle text-center"><a href="#!" class="modal-trigger" data-crudaction="1" ><i class="fa fa-plus"></i></a></td>
                        </tr>
                    </thead>
                <tbody>';
            foreach ($query as $row) {
                if($row['Estat'] === 'actiu') {
                    echo '<tr>
                        <td>'. $row['Nom'] .' '. $row['Cognom'] .' '. $row['SegonCognom'] .'</td>
                        <td>'. $row['DNI'] .'</td>
                        <td>'. $row['UserName'] .'</td>
                        <td>'. $row['Password'] .'</td>
                        <td>'. $row['Tipus'] .'</td>
                        <!--<td>'. $row['Email'] .'</td> -->
                        <td>'. $row['Telefon'] .'</td>
                        <td>'. $row['DataNaixement'] .'</td>
                        <td class="align-middle">
                            <div class="d-flex">
                                <a href="#!" class="modal-trigger pr-1" data-crudaction="2" data-crudtarget="'. $row['idUsuari']. '"><i class="fa fa-pencil"></i></a>
                                <a href="#!" class="modal-trigger" data-crudaction="3" data-crudtarget="'. $row['idUsuari']. '"><i class="fa fa-trash"></i></a>
                            <div>
                        </td>
                </tr>';
                }
            }
            echo '  </tbody>
                </table>';
            }
        }
  //Eliminar Usuaris
  function eliminar($idusuari) {
      $query = 'UPDATE Usuari SET Estat = "inactiu" WHERE idUsuari = "' . $idusuari . '"';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "L'usuari s'ha eliminat!";
      } else {
          return "No s'han pogut eliminar l'usuari!";
      }
  }
  //Modificacio Usuaris
  function modificar($idusuari, $idrol, $password, $tipus, $email, $telefon) {
      $query = 'UPDATE Usuari SET idRol ="'. $idrol. '", Password = "'. $password . '" , Tipus = "'.$tipus.'", Telefon = "'.$telefon.'", Email = "'.$email.'" WHERE idUsuari ="'.$idusuari.'";';
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
