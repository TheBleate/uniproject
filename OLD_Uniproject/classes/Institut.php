<?php


/*Classe*/
class Institut
{
    private $nom;
    private $localitat;
    private $email;
    private $telefon;


    /* Constructor */
    function __construct($nom, $localitat, $email, $telefon)
    {
        $this->nom = $nom;
        $this->localitat = $localitat;
        $this->email = $email;
        $this->telefon = $telefon;

        //Guarda un objecte de gestorInstitut.
        $_SESSION['Institut'][] = $this;
    }

    /*Getters i Setters*/
    //El get retorna un valor
    //El set asigna un valor
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getLocalitat()
    {
        return $this->localitat;
    }


    public function setLocalitat($localitat)
    {
        $this->localitat = $localitat;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getTelefon()
    {
        return $this->telefon;
    }


    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }


    static public function llistarInstituts()
    {
        if (isset($_SESSION['Institut'])) {
            foreach ($_SESSION['Institut'] as $index => $value) {
                echo "ID del Centre: $index" . "<br>";
                echo "<br>";
                echo " Nom: " . $value->nom . "<br>";
                echo " Localitat: " . $value->localitat . "<br>";
                echo " Email: " . $value->email . "<br>";
                echo " Telèfon: " . $value->telefon . "<br>";


            }
        } else {
            echo "No hi ha cap centre";
        }
    }

    public static function eliminarInstitut($id)
    {
        if (isset($_SESSION['Institut'])) {
            foreach ($_SESSION['Institut'] as $index => $valor) {
                if ($index == ($id)) {
                    unset($_SESSION['Institut'][$index]);
                    echo "S'ha crear correctament";
                }
            }
        } else {
            echo "No s'ha pogut eliminar";
        }
    }

    public static function modificarInstitut($id, $nom, $localitat, $email, $telefon)
    {
        if (isset($_SESSION['Institut'])) {
            foreach ($_SESSION['Institut'] as $index => $valor) {
                if ($index == ($id)) {
                    if (isset($nom) && $nom != "") {
                        $_SESSION['Institut'][$index]->nom = $nom;
                    }
                    if (isset($localitat) && $localitat != "") {
                        $_SESSION['Institut'][$index]->localitat = $localitat;
                    }
                    if (isset($email) && $email != "") {
                        $_SESSION['Institut'][$index]->email = $email;
                    }
                    if (isset($telefon) && $telefon != "") {
                        $_SESSION['Institut'][$index]->telefon = $telefon;
                    }
                }
            }
        } else {
            echo "No s'ha pogut eliminar el centre";
        }
    }
}

?>
<?php
