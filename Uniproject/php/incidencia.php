<?php
class Incidencia {
  private $DB;
  public function altaIncidencia($idIncidencia, $idUsuari, $estat, $nom, $descripcio, $registreData) {
    $query = 'INSERT INTO Incidencia(idIncidencia, idUsuari, Estat, Nom, Descripcio, registreData) VALUES '. "(". '"' . $idIncidencia . '","' . $idUsuari . '","' . $estat . '","' . $nom . '","' . $descripcio . '","' . $registreData .'");';
    $query = $this->DB->query($query);
    if ($query === true) {
          return "Incidencia afegida!";
    } else {
      return "No s'han pogut afegir la Incidencia!";
    }
  }
  function __construct($DB) {
      $this->DB = $DB;
  }
}
 ?>
