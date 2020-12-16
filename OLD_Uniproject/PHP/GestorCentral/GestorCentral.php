<?php
  class GestorCentral {
    private $nom;
    private $usuari;
    private $contrasenya;
  /* Constructor */
  function __construct($nom, $usuari, $contrasenya) {
    $this->nom = $nom;
    $this->usuari = $usuari;
    $this->contrasenya = $contrasenya;
    //Guarda un objecte de gestorCentral.
    $_SESSION['GestorCentral'][] = $this;
  }

  /* Aconseguir l'usuari del gestor Central */
  public function getNom(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setNom($nom) {
    $this->nom = $nom;
  }
  /* Aconseguir l'usuari del gestor Central */
  public function getUsuari(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setUsuari($usuari) {
    $this->usuari = $usuari;
  }

  /* Aconseguir la contrasenya del gestor Central */
  public function getContrasenya(){
    return $this->contrasenya;
  }
  /* Actualitzar contrasenya */
  public function setContrasenya($contrasenya) {
    $this->usuari = $contrasenya;
  }
  static public function llistarGestorCentral() {
    foreach ($_SESSION['GestorCentral'] as $index => $value) {
      echo "Gestor $index";
      echo " Nom: ".$value->nom;
      echo " Usuari: ".$value->usuari;
      echo " Contrasenya: ****<br><br>";
    }
  }

  public static function eliminarGestorCentral($id){
    foreach ($_SESSION['GestorCentral'] as $index => $valor) {
      if($index == ($id)){
        unset($_SESSION['GestorCentral'][$index]);
      }
    }
  echo "S'ha fet correctament";
  }

  public static function modificarGestorCentral($id,$nom,$usuari,$contrasenya){
    foreach ($_SESSION['GestorCentral'] as $index => $valor) {
      if($index == ($id)){
        if(isset($nom) && $nom != ""){
          $_SESSION['GestorCentral'][$index]->nom = $nom;
        }
        if(isset($usuari) && $usuari != ""){
          $_SESSION['GestorCentral'][$index]->usuari = $usuari;
        }
        if(isset($contrasenya) && $contrasenya != ""){
          $_SESSION['GestorCentral'][$index]->contrasenya = $contrasenya;
        }
      }
    }
  }
}
?>
