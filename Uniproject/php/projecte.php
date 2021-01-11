<?php
class Projecte {
  public function alta($idinstitut, $nom, $localitat, $adreça, $telefon, $cif, $email) {
    $query = 'INSERT INTO Projecte(idProjecte, idProposta, Localitat, Adreça, Telefon, CIF, Email) VALUES '. "(". '"' . $idinstitut . '","' . $nom . '","' . $localitat .  '","' . $adreça .  '","' . $telefon . '","' . $cif . '","' . $email .'");';

    $query = $this->DB->query($query);
    if ($query === true) {
          return "Projecte afegida!";
      } else {
          return "No s'han pogut afegir la Empresa!";
      }
    }
}
?>
