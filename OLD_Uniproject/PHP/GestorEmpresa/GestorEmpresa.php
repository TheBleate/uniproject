<?php
  class GestorEmpresa {
    private $nom;
    private $usuari;
    private $contrasenya;
  /* Constructor */
  function __construct($nom, $usuari, $contrasenya) {
    $this->nom = $nom;
    $this->usuari = $usuari;
    $this->contrasenya = $contrasenya;
    //Guarda un objecte de gestorEmpresa.
    $_SESSION['GestorEmpresa'][] = $this;
  }

  /* Aconseguir l'usuari del gestor Empresa */
  public function getNom(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setNom($nom) {
    $this->nom = $nom;
  }
  /* Aconseguir l'usuari del gestor Empresa */
  public function getUsuari(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setUsuari($usuari) {
    $this->usuari = $usuari;
  }

  /* Aconseguir la contrasenya del gestor Empresa */
  public function getContrasenya(){
    return $this->contrasenya;
  }
  /* Actualitzar contrasenya */
  public function setContrasenya($contrasenya) {
    $this->usuari = $contrasenya;
  }
  static public function llistarGestorEmpresa() {
    foreach ($_SESSION['GestorEmpresa'] as $index => $value) {
      echo "Gestor $index";
      echo " Nom: ".$value->nom;
      echo " Usuari: ".$value->usuari;
      echo " Contrasenya: ****<br><br>";
    }
  }

  public static function eliminarGestorEmpresa($id){
    foreach ($_SESSION['GestorEmpresa'] as $index => $valor) {
      if($index == ($id)){
        unset($_SESSION['GestorEmpresa'][$index]);
      }
    }
  echo "S'ha fet correctament";
  }

  public static function modificarGestorEmpresa($id,$nom,$usuari,$contrasenya){
    foreach ($_SESSION['GestorEmpresa'] as $index => $valor) {
      if($index == ($id)){
        if(isset($nom) && $nom != ""){
          $_SESSION['GestorEmpresa'][$index]->nom = $nom;
        }
        if(isset($usuari) && $usuari != ""){
          $_SESSION['GestorEmpresa'][$index]->usuari = $usuari;
        }
        if(isset($contrasenya) && $contrasenya != ""){
          $_SESSION['GestorEmpresa'][$index]->contrasenya = $contrasenya;
        }
      }
    }
  }
}
?>
