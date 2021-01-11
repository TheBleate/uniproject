<<?php

//alta Usuaris
public function altaUsuaris $idRol, $nom, $cognom, $segonCognom, $dni, $username, $password, $email, $telefon, $dataNaixement) {
	$consulta = 'INSERT INTO Usuari(idRol, Nom, Cognom, SegonCognom, DNI, UserName, Password, Tipus, Email, Telefon, DataNaixement, Estat) VALUES '. "(". '"' . $idRol . '","' . $nom . '","' . $cognom . '","' . $segonCognom . '","' . $dni . '","' . $username . '","' . $password . '","Alumne","' . $email . '","' . $telefon . '","' . $dataNaixement . '","actiu");';

  $consulta = $this->DB->query($query);
  if ($consulta === true) {
        return "Usuari afegit!";
    } else {
        return "No s'han pogut afegir l'usuari!";
    }
  }

  //Mostrar Usuaris

  //Eliminar Usuaris

  //Modificacio Usuaris
 ?>
