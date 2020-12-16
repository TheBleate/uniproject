<?php
  class Incidencia {
    private $nom;
    private $descripcio;
    private $registreData;
  /* Constructor */
  function __construct($nom, $descripcio, $registreData) {
    $this->nom = $nom;
    $this->descripcio = $descripcio;
    $this->registreData = $registreData;
    //Guarda un objecte de gestorInstitut.
    $_SESSION['Incidencia'][] = $this;
  }

  /* Aconseguir l'usuari del gestor Institut */
  public function getNom(){
    return $this->nom;
  }
  /* Actualitzar ususari*/
  public function setNom($nom) {
    $this->nom = $nom;
  }
  /* Aconseguir l'usuari del gestor Institut */
  public function getDescripcio(){
    return $this->descripcio;
  }
  /* Actualitzar ususari*/
  public function setDescripcio($descripcio) {
    $this->descripcio = $descripcio;
  }

  /* Aconseguir la contrasenya del gestor Institut */
  public function getRegisreData(){
    return $this->registreData;
  }
  /* Actualitzar contrasenya */
  public function setRegisreData($registreData) {
    $this->registreData = $registreData;
  }
  static public function llistarIncidencia() {
    if(isset($_SESSION['Incidencia'])){
      foreach ($_SESSION['Incidencia'] as $index => $value) {
        echo "Incidencia ".$index;
        echo " Nom: ".$value->nom;
        echo " Descripció: ".$value->descripcio;
        echo " Data: ".$value->registreData['hours'].":".
                      $value->registreData['minutes'].":".
                      $value->registreData['seconds']." ".
                      $value->registreData['mday']."/".
                      $value->registreData['mon']."/".
                      $value->registreData['year'];
        echo " <br><br>";
      }
    }
    else {
      echo "No hi ha cap Incidència";
    }
  }

  public static function eliminarIncidencia($id){
    $eliminacio = false;
    foreach ($_SESSION['Incidencia'] as $index => $valor) {
      if($index == ($id)){
        unset($_SESSION['Incidencia'][$index]);
        echo "S'ha fet correctament";
        $eliminacio = true;
      }
    }
    if(!$eliminacio){
      echo "No s'ha pogut eliminar";
    }
  }

  public static function modificarIncidencia($id, $incidencia, $descripcio){
    foreach ($_SESSION['Incidencia'] as $index => $valor) {
      if($index == ($id)){
        if(isset($incidencia) && $incidencia != ""){
          $_SESSION['Incidencia'][$index]->nom = $incidencia;
        }
        if(isset($descripcio) && $descripcio != ""){
          $_SESSION['Incidencia'][$index]->descripcio = $descripcio;
        }
      }
    }
  }
}
?>
