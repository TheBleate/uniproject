<?php

  include ("../connectar.php");

  class GestorInstitut {
    private $idRol;
    private $Nom;
    private $Cognom;
    private $SegonCognom;
    private $DNI;
    private $Username;
    private $Password;
    private $GestorInstitut;
    private $Email;
    private $Telefon;
    private $Data_naixement;


  /* Constructor */
  function __construct($idRol, $Nom, $Cognom, $SegonCognom, $DNI, $Username, $Password, $GestorInstitut, $Email, $Telefon, $Data_naixement) {
    $this->idRol = $idRol;
    $this->Nom = $Nom;
    $this->Cognom = $Cognom;
    $this->SegonCognom = $SegonCognom;
    $this->DNI = $DNI;
    $this->Username = $Username;
    $this->Password = $Password;
    $this->GestorInstitut = $GestorInstitut;
    $this->Email = $Email;
    $this->Telefon = $Telefon;
    $this->Data_naixement = $Data_naixement;

    $connexio = new Connectar();
    $link = $connexio->con();
  }


  /*  */
  public function getIdRol(){
    return $this->idRol;
  }
  /*  */
  public function setIdRol($idRol) {
    $this->idRol = $idRol;
  }

  /*  */
  public function getNom(){
    return $this->Nom;
  }
  /*  */
  public function setNom($Nom) {
    $this->Nom = $Nom;
  }

  /*  */
  public function getCognom(){
    return $this->Cognom;
  }
  /*  */
  public function setCognom($Cognom) {
    $this->Cognom = $Cognom;
  }

  /*  */
  public function getSegonCognom(){
    return $this->SegonCognom;
  }
  /*  */
  public function setSegonCognom($SegonCognom) {
    $this->SegonCognom = $SegonCognom;
  }

  /*  */
  public function getDNI(){
    return $this->DNI;
  }
  /*  */
  public function setDNI($DNI) {
    $this->DNI = $DNI;
  }

  /*  */
  public function getUsername(){
    return $this->Username;
  }
  /*  */
  public function setUsername($Username) {
    $this->Username = $Username;
  }

  /*  */
  public function getPassword(){
    return $this->Password;
  }
  /*  */
  public function setPassword($Password) {
    $this->Password = $Password;
  }

  public function getGestorInstitut(){
    return $this->GestorInstitut;
  }
  /*  */
  public function setGestorInstitut($GestorInstitut) {
    $this->GestorInstitut = $GestorInstitut;
  }

  /*  */
  public function getEmail(){
    return $this->Email;
  }
  /*  */
  public function setEmail($Email) {
    $this->Email = $Email;
  }

  /*  */
  public function getTelefon(){
    return $this->Telefon;
  }
  /*  */
  public function setTelefon($Telefon) {
    $this->Telefon = $Telefon;
  }

  /*  */
  public function getData_naixement(){
    return $this->Data_naixement;
  }
  /*  */
  public function setData_naixement($Data_naixement) {
    $this->Data_naixement = $Data_naixement;
  }

  
  static public function llistarGestorInstitut() {
    $sql="Select * from Usuari where idRol=3";
    $connexio = new Connectar();
    $link = $connexio->con();

    if($resultat = mysqli_query($link, $sql)){
      foreach ($resultat as $index) {
        echo "Gestor $index";
      /*  echo " idUsuari: "      .$value->idUsuari;*/
        echo " idRol: "         .$index->idRol;
        echo " Nom: "           .$index->Nom;
        echo " Cognom: "        .$index->Cognom;
        echo " SegonCognom: "   .$index->SegonCognom;
        echo " DNI: "           .$index->DNI;
        echo " Username: "      .$index->Username;
        echo " Password: "      .$index->Password;
        echo " GestorInstitut: ".$index->GestorInstitut;
        echo " Email: "         .$index->Email;
        echo " Telefon: "       .$index->Telefon;
        echo " Data_naixement: ".$index->Data_naixement;
        echo " Contrasenya: ****<br><br>";
      }
    }
    else{
      echo "No hi ha cap centre";
    }
  }

  public static function eliminarGestorInstitut($id){
    $connexio = new Connectar();
    $link = $connexio->con();
    if(isset($link['GestorInstitut'])){
      foreach ($link['GestorInstitut'] as $index => $valor) {
        if($index == ($id)){
          unset($link['GestorInstitut'][$index]);
          echo "S'ha fet correctament";
        }
      }
    }
    else {
      echo "No s'ha pogut eliminar";
    }
  }



  public static function modificarGestorInstitut($id,$idRol,$Nom,$Cognom,$SegonCognom,$DNI,$Username,$Password,$GestorInstitut,$Email,$Telefon,$Data_naixement){
    $connexio = new Connectar();
    $link = $connexio->con();
    
    if(isset($link['GestorInstitut'])){
      foreach ($link['GestorInstitut'] as $index => $valor) {
        if($index == ($id)){
          if(isset($idRol) && $idRol != ""){
            $link['GestorInstitut'][$index]->idRol = $idRol;
          }
          if(isset($Nom) && $Nom != ""){
            $link['GestorInstitut'][$index]->Nom = $Nom;
          }
          if(isset($Cognom) && $Cognom != ""){
            $link['GestorInstitut'][$index]->Cognom = $Cognom;
          }
          if(isset($SegonCognom) && $SegonCognom != ""){
            $link['GestorInstitut'][$index]->SegonCognom = $SegonCognom;
          }
          if(isset($DNI) && $DNI != ""){
            $link['GestorInstitut'][$index]->DNI = $DNI;
          }
          if(isset($Username) && $Username != ""){
            $link['GestorInstitut'][$index]->Username = $Username;
          }
          if(isset($Password) && $Password != ""){
            $link['GestorInstitut'][$index]->Password = $Password;
          }
          if(isset($GestorInstitut) && $GestorInstitut != ""){
            $link['GestorInstitut'][$index]->GestorInstitut = $GestorInstitut;
          }
          if(isset($Email) && $Email != ""){
            $link['GestorInstitut'][$index]->Email = $Email;
          }
          if(isset($Telefon) && $Telefon != ""){
            $link['GestorInstitut'][$index]->Telefon = $Telefon;
          }
          if(isset($Data_naixement) && $Data_naixement != ""){
            $link['GestorInstitut'][$index]->Data_naixement = $Data_naixement;
          }
        }
      }
    }
    else {
      echo "No s'ha pogut eliminar";
    }
  }
}
?>
