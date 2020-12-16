<?php

class empresa {  
    private $nom;  
    private $localitat;  
    private $telefon;  
    private $email;  


    //Constructor de la classe empresa
    //Funció crear empresa
    function __construct($nom, $localitat, $telefon, $email) {  
    $this->nom = $nom;  
    $this->localitat = $localitat;  
    $this->telefon = $telefon;
    $this->email = $email;
    
    //Guarda tot el que té this (guarda l'objecte de la classe empresa), ho guarda a la array
    $_SESSION['empresa'][] = $this;

    //mostrar tot
    //echo "<pre>" , var_dump($_SESSION['empresa']),"<pre>";
    
    }

    //Funció llistar empreses
    static function llistar(){
 
    /* Imprimir sense Taula
    foreach ($_SESSION['empresa'] as $empresa) {
        echo "<p>".$empresa->nom." - ".$empresa->localitat."</p>";
    }
    */
    
    //Bucle sense mostrar posicio
    //Explicació funcionament
    //$_SESSION['empresa'] = Array
    //$empresa guarda el contingut de la array
    //$empresa->nom, del contingut que guarda $empresa, mostra nom
      echo "<br>";
      echo "<table>";
      echo "<tr>";
      echo "  <th> ID  </th>";      
      echo "  <th> Nom  </th>";
      echo "  <th> Localitat </th>";
      echo "  <th> Telefon </th>";
      echo "  <th> Email </th>";
      echo "<tr>";

    foreach ($_SESSION['empresa'] as $key=>$empresa) {

      echo "</tr>";
      echo "<tr>";
      echo "<td> " . $key . "</td>";
      echo "<td> " . $empresa->nom . "</td>";
      echo "<td> " . $empresa->localitat . "</td>";
      echo "<td> " . $empresa->telefon . "</td>";
      echo "<td> " . $empresa->email . "</td>";
      echo "</tr>";
      }
    echo "</table>";    
    echo "<br>";
   // echo "Llistant amb posició";
    
    //Bucle mostrant la posició
    /*for ($i=0;$i<count($_SESSION['empresa']);$i++) {
      echo "<table>";
      echo "<tr>";
      echo "  <th> Nom  </th>";
      echo "  <th> Localitat </th>";
      echo "  <th> Telefon </th>";
      echo "  <th> Email </th>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> " . $i . "</td>";
      echo "<td> " . $_SESSION['empresa'][$i]->nom . "</td>";
      echo "<td> " . $_SESSION['empresa'][$i]->localitat . "</td>";
      echo "<td> " . $_SESSION['empresa'][$i]->telefon . "</td>";
      echo "<td> " . $_SESSION['empresa'][$i]->email . "</td>";
      echo "</tr>";
      echo "</table>";    }
    */
    /*comprovar si la cosa tira a bé
        echo "llistat empreses";
    echo "<pre>" , var_dump($_SESSION['empresa']),"<pre>";
    */
    }

    //Funcio eliminar empresa
    static function eliminar(){
      $identificador = $_POST['identificador'];
      echo "<br>El identificador introduit es ".$identificador. "<br>";
      foreach($_SESSION['empresa'] as $key=>$empresa) {
        if($key == $identificador){
          unset($_SESSION['empresa'][$key]);
          echo "Has eliminat l'usuari";
          return;
        }
      }
      empresa::llistar();
    }


    //Getter i Setters
    //Getter i Setters Nom
    public function getNom() {  
      return $this->nom;  
    }  
    public function setNom($nom) {  
      $this->nom = $nom;  
    } 
    //Getter i Setters Localitat
    public function getLocalitat() {  
      return $this->localitat;  
    }  
    public function setLocalitat($localitat) {  
      $this->localitat = $localitat;  
    }  
    //Getter i Setters Telefon
    public function getTelefon() {  
        return $this->telefon;  
    }  
    public function setTelefon($telefon) {  
        $this->telefon = $telefon;  
    }  
    //Getter i Setters Email
    public function getEmail() {  
      return $this->email;  
    }
    public function setEmail($email) {  
      $this->email = $email;  
    }  

  }
  
  



?>