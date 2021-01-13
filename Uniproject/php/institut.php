<?php
class Institut {
  private $DB;
  public function altaInstitut($idinstitut, $nom, $localitat, $adreça, $telefon, $cif, $email) {
    $query = 'INSERT INTO Institut(idInstitut, Nom, Localitat, Adreça, Telefon, CIF, Email) VALUES '. "(". '"' . $idinstitut . '","' . $nom . '","' . $localitat .  '","' . $adreça .  '","' . $telefon . '","' . $cif . '","' . $email .'");';

    $query = $this->DB->query($query);
    if ($query === true) {
          return "Empresa afegida!";
      } else {
          return "No s'han pogut afegir la Empresa!";
      }
    }
  function __construct($DB) {
      $this->DB = $DB;
  }
}
 ?>
