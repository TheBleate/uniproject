<?php

class projecte {  
    private $nom;  
    private $nom_empresa_centre;  
    private $telefon;  
    private $email;
    private $municipi;
    private $categoria;
    private $comentari;

    //Constructor de la classe empresa
    //Funció crear empresa
    
    function __construct($nom_projecte, $nom_empresa_centre, $telefon, $email, $municipi, $categoria, $comentari) {  
    
    //la variable $this guarda a dins de cada camp de l'objecte la informació indicada.
    $this->nom = $nom_projecte;  
    $this->nom_empresa_centre = $nom_empresa_centre;  
    $this->telefon = $telefon;
    $this->email = $email;
    $this->municipi = $municipi;
    $this->categoria = $categoria;
    $this->comentari = $comentari;
    
    //Guarda tot el que té this (guarda l'objecte de la classe empresa), ho guarda a la array
    $_SESSION['projecte'][] = $this;

    //mostrar tot
    //echo "<pre>" , var_dump($_SESSION['projecte']),"<pre>";
    
    }

    //Llistar projectes
    static function llistar(){
    //Bucle sense mostrar posicio
    //Explicació funcionament
    //$_SESSION['empresa'] = Array
    //$empresa guarda el contingut de la array
    //$empresa->nom, del contingut que guarda $empresa, mostra nom

      echo "<table>";
      echo "<tr>";
      echo "  <th> ID  </th>";
      echo "  <th> Nom  </th>";
      echo "  <th> Nom Empresa/Centre </th>";
      echo "  <th> Telefon </th>";
      echo "  <th> Email </th>";
      echo "  <th> Municipi </th>";
      echo "  <th> Categoria </th>";
      echo "  <th> Comentari </th>";
      echo "<tr>";

    foreach ($_SESSION['projecte'] as $key=>$projecte) {

      echo "</tr>";
      echo "<tr>";
      echo "<td> " . $key . "</td>";
      echo "<td> " . $projecte->nom . "</td>";
      echo "<td> " . $projecte->nom_empresa_centre . "</td>";
      echo "<td> " . $projecte->telefon . "</td>";
      echo "<td> " . $projecte->email . "</td>";
      echo "<td> " . $projecte->municipi . "</td>";
      echo "<td> " . $projecte->categoria . "</td>";
      echo "<td> " . $projecte->comentari . "</td>";
      echo "</tr>";
      }
    echo "</table>";
    echo "<br>";

    /*comprovar si la cosa tira a bé
        echo "llistat empreses";
    echo "<pre>" , var_dump($_SESSION['empresa']),"<pre>";
    */
    }

    //Funcio eliminar empresa
    static function eliminar(){
      $identificador = $_POST['identificador'];
      echo "<br>El identificador introduit es ".$identificador. "<br>";
      foreach($_SESSION['projecte'] as $key=>$projecte) {
        if($key == $identificador){
          unset($_SESSION['projecte'][$key]);
          echo "Has eliminat el projecte";
          return;
        }
      }
      projecte::llistar();
    }


    //Getter i Setters nom projecte
    public function getNom() {  
      return $this->nom;  
    }  
    public function setNom($nom_projecte) {  
      $this->nom = $nom_projecte;  
    } 
    //Getter i Setters Nom empresa o centre
    public function getNom_empresa_centre() {  
      return $this->nom_empresa_centre;  
    }  
    public function setNom_empresa_centre($nom_empresa_centre) {  
      $this->nom_empresa_centre = $nom_empresa_centre;  
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
    //Getter i Setters Municipi
    public function getMunicipi() {  
      return $this->municipi;  
    }
    public function setMunicipi($municipi) {  
      $this->municipi = $municipi;  
    }  
    //Getter i Setters Categoria
    public function getCategoria() {  
      return $this->categoria;  
    }
    public function setCategoria($categoria) {  
      $this->categoria = $categoria;  
    }  
    //Getter i Setters Comentari
    public function getComentari() {  
      return $this->comentari;  
    }
    public function setComentari($comentari) {  
      $this->comentari = $comentari;  
    }  


}

?>