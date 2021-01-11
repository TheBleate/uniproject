<?php
class Usuari {

//alta Usuaris
  public function altaUsuaris $idRol, $nom, $cognom, $segonCognom, $dni, $username, $password, $tipus, $email, $telefon, $dataNaixement) {
    $query = 'INSERT INTO Usuari(idRol, Nom, Cognom, SegonCognom, DNI, UserName, Password, Tipus, Email, Telefon, DataNaixement, Estat) VALUES '. "(". '"' . $idRol . '","' . $nom . '","' . $cognom . '","' . $segonCognom . '","' . $dni . '","' . $username . '","' . $password . '","' . $tipus . '","' . $email . '","' . $telefon . '","' . $dataNaixement . '","actiu");';

    $query = $this->DB->query($query);
    if ($query === true) {
          return "Usuari afegit!";
      } else {
          return "No s'han pogut afegir l'usuari!";
      }
    }

  //Mostrar Usuaris

  //Eliminar Usuaris

  //Modificacio Usuaris
}
 ?>
