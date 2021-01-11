<?php
class Categoria {
  public function altaCategoria($idcategoria, $nom, $descripcio) {
    $query = 'INSERT INTO Categoria(idCategoria, Nom, Descripcio) VALUES '. "(". '"' . $idCategoria . '","' . $nom . '","' . $descripcio . '");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Categoria afegida!";
    } else {
      return "No s'han pogut afegir la Categoria!";
    }
  }
}
 ?>
