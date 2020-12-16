<?php
  class GestorInstitut {
    private $nom;
    private $usuari;
    private $contrasenya;
  /* Constructor */
  function __construct($nom, $usuari, $contrasenya) {
    $this->nom = $nom;
    $this->usuari = $usuari;
    $this->contrasenya = $contrasenya;
    //Guarda un objecte de gestorInstitut.
    $_SESSION['GestorInstitut'][] = $this;
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
  public function getUsuari(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setUsuari($usuari) {
    $this->usuari = $usuari;
  }

  /* Aconseguir la contrasenya del gestor Institut */
  public function getContrasenya(){
    return $this->contrasenya;
  }
  /* Actualitzar contrasenya */
  public function setContrasenya($contrasenya) {
    $this->usuari = $contrasenya;
  }
  static public function llistarGestorInstitut() {
    foreach ($_SESSION['GestorInstitut'] as $index => $value) {
      echo "Gestor $index";
      echo " Nom: ".$value->nom;
      echo " Usuari: ".$value->usuari;
      echo " Contrasenya: ****<br><br>";
    }
  }

  public static function eliminarGestorInstitut($id){
    foreach ($_SESSION['GestorInstitut'] as $index => $valor) {
      if($index == ($id)){
        unset($_SESSION['GestorInstitut'][$index]);
      }
    }
  echo "S'ha fet correctament";
  }

  public static function modificarGestorInstitut($id,$nom,$usuari,$contrasenya){
    foreach ($_SESSION['GestorInstitut'] as $index => $valor) {
      if($index == ($id)){
        if(isset($nom) && $nom != ""){
          $_SESSION['GestorInstitut'][$index]->nom = $nom;
        }
        if(isset($usuari) && $usuari != ""){
          $_SESSION['GestorInstitut'][$index]->usuari = $usuari;
        }
        if(isset($contrasenya) && $contrasenya != ""){
          $_SESSION['GestorInstitut'][$index]->contrasenya = $contrasenya;
        }
      }
    }
  }
}
?>
