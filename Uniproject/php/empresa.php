<?php

public function alta($idempresa, $nom, $localitat, $adreça, $telefon, $cif, $email) {
  $query = 'INSERT INTO Empresa(idEmpresa, Nom, Localitat, Adreça, Telefon, CIF, Email) VALUES '. "(". '"' . $idempresa . '","' . $nom . '","' . $localitat .  '","' . $adreça .  '","' . $telefon . '","' . $cif . '","' . $email .'");';

  $query = $this->DB->query($query);
  if ($query === true) {
        return "Empresa afegida!";
    } else {
        return "No s'han pogut afegir la Empresa!";
    }
  }

 ?>
