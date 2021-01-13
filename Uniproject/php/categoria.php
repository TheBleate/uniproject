<?php
class Categoria {
  private $DB;
  public function altaCategoria($idcategoria, $nom, $descripcio) {
    $query = 'INSERT INTO Categoria(idCategoria, Nom, Descripcio) VALUES '. "(". '"' . $idCategoria . '","' . $nom . '","' . $descripcio . '");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Categoria afegida!";
    } else {
      return "No s'ha pogut afegir la Categoria!";
    }
  }
  function __construct($DB) {
      $this->DB = $DB;
  }
}

 ?>
