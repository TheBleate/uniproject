<?php
  class GestorCategoria {
    private $nom;
  /* Constructor */
  function __construct($nom) {
    $this->nom = $nom;
    //Guarda un objecte de gestorCategoria.
    $_SESSION['GestorCategoria'][] = $this;
  }

  /* Aconseguir l'usuari del gestor Categoria */
  public function getNom(){
    return $this->usuari;
  }
  /* Actualitzar ususari*/
  public function setNom($nom) {
    $this->nom = $nom;
  }
  static public function llistarGestorCategoria() {
    foreach ($_SESSION['GestorCategoria'] as $index => $value) {
      echo "Categoria $index";
      echo " Nom: ".$value->nom;
		echo "<br>";
    }
  }
  public static function eliminarGestorCategoria($id){
    foreach ($_SESSION['GestorCategoria'] as $index => $valor) {
      if($index == ($id)){
        unset($_SESSION['GestorCategoria'][$index]);
      }
    }
  echo "S'ha fet correctament";
  }

  public static function modificarGestorCategoria($id,$nom){
    foreach ($_SESSION['GestorCategoria'] as $index => $valor) {
      if($index == ($id)){
        if(isset($nom) && $nom != ""){
          $_SESSION['GestorCategoria'][$index]->nom = $nom;
        }
      }
    }
  }
}
?>
