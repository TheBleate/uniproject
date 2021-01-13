<?php

class institut {

  //Variable que realitza la connexió a la BD
  private $DB;

//$DB es del fitxer Database, la private static
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

  //Constructor
  function __construct($DB) {
      $this->DB = $DB;

  }

}
?>
