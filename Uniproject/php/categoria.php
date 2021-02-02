<?php
class Categoria {
  private $DB;

  public function llistar() {
    $query = 'SELECT idCategoria, Nom, Descripcio FROM Categoria;';

    $query = $this->DB->query($query);
    //echo $query;
    if ($query) {
        echo '<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Descripcio</th>
                        <td class="align-middle text-center"><a href="#!" class="modal-trigger" data-crudaction="1" ><i class="fa fa-plus"></i></a></td>
                    </tr>
                </thead>
                <tbody>';
        foreach ($query as $row) {
              echo '<tr>
                      <td>'. $row['Nom'].'</td>
                      <td>'. $row['Descripcio'] .'</td>
                      <td class="align-middle">
                          <div class="d-flex">
                              <a href="#!" class="modal-trigger pr-1" data-crudaction="2" data-crudtarget="'. $row['idCategoria']. '"><i class="fa fa-pencil"></i></a>
                              <a href="#!" class="modal-trigger" data-crudaction="3" data-crudtarget="'. $row['idCategoria']. '"><i class="fa fa-trash"></i></a>
                          <div>
                      </td>
                  </tr>';
        }
        echo '    </tbody>
              </table>';
    }
  }
  public function alta($nom, $descripcio) {
    $query = 'INSERT INTO Categoria(Nom, Descripcio) VALUES '. "(". '"' . $nom . '","' . $descripcio . '");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Categoria afegida!";
    } else {
      return "ERROR: No s'ha pogut afegir la Categoria!";
    }
  }
  function eliminar($idCategoria)
  {
      $query = 'DELETE FROM Categoria WHERE idCategoria = "' . $idCategoria . '"';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "La categoria s'ha eliminat!";
      } else {
          return "ERROR: No s'ha pogut eliminar la categoria!";
      }
  }

  function modificar($idCategoria, $nom, $Descripcio) {
      $query = 'UPDATE Categoria SET Nom = "'. $nom . '", Descripcio = "'. $Descripcio .'" WHERE idCategoria ="'.$idCategoria.'";';
      $query = $this->DB->query($query);
      if ($query === true) {
          return "Canvis aplicats!";
      }else {
          return "ERROR: No s'han pogut aplicar els canvis!";
      }
  }

  function __construct($DB) {
      $this->DB = $DB;
  }
}

?>
