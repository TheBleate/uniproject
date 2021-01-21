<?php
/* +------------------------------------+
   |        FITXER INTERMEDIARI         |
   +------------------------------------+ */

   require_once('./const.php');
   require_once('./database.php');
   require_once('./categoria.php');



   $tab = $_POST['tab'] ?? null;
   $action = $_POST['action'] ?? null;
   $referrer = null;

   if ($tab && $action) {
       $DB = new Database();
       switch ($tab) {
          case 'categoria':
            $GC = new Categoria($DB->getDB());
            switch($action) {
                case 'alta':
                    $nom = $_POST['nom'] ?? null;
                    $descripcio = $_POST['descripcio'] ?? null;

                    if ($nom && $descripcio) {
                        $GC->alta($nom, $descripcio);
                    }
                    break;

            }
            break;
       }
   }

   exit('Error inesperat');
?>
