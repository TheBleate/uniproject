<?php
class Categoria {
  private $DB;

  public function llistar() {
    $query = 'SELECT nom, Estat FROM Usuari WHERE Tipus = "categoria";';

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
                      <td>'. $row['nom'].'</td>
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
  public function alta($idcategoria, $nom, $descripcio) {
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
      $query = 'UPDATE Categoria SET Estat = "inactiu" WHERE idIncidencia = "' . $idCategoria . '"';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "La categoria s'ha eliminat!";
      } else {
          return "No s'ha pogut eliminar la categoria!";
      }
  }

  function modificar($idUsuari, $idCategoria, $nom, $descripcio,) {
      $query = 'UPDATE Usuari SET idCategoria ="'. $idCategoria . '", Nom = "'. $nom . '", Descripcio = "'. $Descripcio .'" WHERE idUsuari ="'.$idusuari.'";';
      $query = $this->DB->query($query);
      if ($query === ture) {
          return "canvis aplicats!";
      }else {
          return "No s'han pogut aplicar els canvis!";
      }
  }

  function __construct($DB) {
      $this->DB = $DB;
  }
}

?>
