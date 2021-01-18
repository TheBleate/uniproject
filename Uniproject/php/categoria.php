<?php
class Categoria {
  private $DB;

  public function llistar() {
    $query = 'SELECT Nom, Descripcio FROM Categoria;';

    $query = $this->DB->query($query);

    if ($query) {
        echo '<table border="1" frame="void" rules="cols">
                <thead>
                    <tr>
                        <th>nom</th>
                        <!--  <th>Estat</th> -->
                        <td><a href="./crudusuaris.php?action=0&type=0"><i class="fas fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';

        foreach ($query as $row) {
          if($row['Estat'] === 'actiu') {
              echo '<tr>
                      <td>'. $row['Nom'].'</td>
                      <td>'. $row['Descripcio'] .'</td>
                      <td>
                          <div class="table-icons">
                              <a href="./crudusuaris.php?uid='. $row['idCategoria']. '&action=1&type=0"><i class="fas fa-edit"></i></a>
                              <a href="./crudusuaris.php?uid='. $row['idCategoria']. '&action=2&type=0"><i class="fas fa-trash-alt"></i></a>
                          <div>
                      </td>
                  </tr>';
          }
        }
        echo '    </tbody>
              </table>';
    }
  }
  public function alta($idCategoria, $nom, $descripcio) {
    $query = 'INSERT INTO Categoria(idCategoria, Nom, Descripcio) VALUES '. "(". '"' . $idCategoria . '","' . $nom . '","' . $descripcio . '");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Categoria afegida!";
    } else {
      return "No s'ha pogut afegir la Categoria!";
    }
  }
  function eliminar($idCategoria)
  {
      $query = 'UPDATE Categoria SET Estat = "inactiu" WHERE idCategoria = "' . $idCategoria . '"';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "La categoria s'ha eliminat!";
      } else {
          return "No s'ha pogut eliminar la categoria!";
      }
  }

  function modificar($idCategoria, $nom, $Descripcio) {
      $query = 'UPDATE Categoria SET Nom = "'. $nom . '", Descripcio = "'. $Descripcio .'" WHERE idCategoria ="'.$idCategoria.'";';
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
