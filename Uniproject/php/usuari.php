<?php
class Usuari {
    private $DB;

    //alta Usuaris
    public function altaUsuari($idRol, $nom, $cognom, $segonCognom, $dni, $username, $password, $tipus, $email, $telefon, $dataNaixement) {
        $query = 'INSERT INTO Usuari(idRol, Nom, Cognom, SegonCognom, DNI, UserName, Password, Tipus, Email, Telefon, DataNaixement, Estat) VALUES '. "(". '"' . $idRol . '","' . $nom . '","' . $cognom . '","' . $segonCognom . '","' . $dni . '","' . $username . '","' . $password . '","' . $tipus . '","' . $email . '","' . $telefon . '","' . $dataNaixement . '","actiu");';

        $query = $this->DB->query($query);
        if ($query === true) {
            return "Usuari afegit!";
        } else {
            return "No s'han pogut afegir l'usuari!";
        }
    }

    //Mostrar Usuaris
    public function llistarUsuaris() {
        $query = 'SELECT idUsuari, idRol, Nom, Cognom, SegonCognom, DNI, UserName, Tipus, Email, Telefon, DataNaixement, Estat FROM Usuari';

        $query = $this->DB->query($query);

        if ($query) {
            echo '<table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Nom Complet</th>
                        <th>DNI</th>
                        <th>Nom Usuari</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Data Naixement</th>
                        <!--  <th>Estat</th> -->
                    <td><a href="./crudusuaris.php?action=0&type=0"><i class="fas fa-plus"></i></a></td>
                </tr>
            </thead>
            <tbody>';

            foreach ($query as $row) {
                if($row['Estat'] === 'actiu') {
                    echo '<tr>
                        <td>'. $row['Nom'] .' '. $row['Cognom'] .' '. $row['SegonCognom'] .'</td>
                        <td>'. $row['DNI'] .'</td>
                        <td>'. $row['UserName'] .'</td>
                        <td>'. $row['Email'] .'</td>
                        <td>'. $row['Telefon'] .'</td>
                        <td>'. $row['DataNaixement'] .'</td>
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
            echo '  </tbody>
                </table>';
            }
        }
  //Eliminar Usuaris

  //Modificacio Usuaris

  function __construct($DB) {
      $this->DB = $DB;
  }
}
 ?>
