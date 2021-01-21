<?php
/* +------------------------------------+
   |        FITXER INTERMEDIARI         |
   +------------------------------------+ */

   require_once('./const.php');
   require_once('./database.php');
   require_once('./categoria.php');
   require_once('./incidencia.php');
   require_once('./usuari.php');
   require_once('./empresa.php');
   require_once('./institut.php');




   $tab = $_POST['tab'] ?? null;
   $action = $_POST['action'] ?? null;
   $referrer = null;

   if ($tab && $action) {
       $DB = new Database();
       switch ($tab) {
          case 'categoria':
            $GC = new Categoria($DB->getDB());
            $id = $_POST['target'] ?? null;
            $nom = $_POST['nom'] ?? null;
            $descripcio = $_POST['descripcio'] ?? null;

            switch($action) {
                case 'alta':
                    if ($nom && $descripcio) {
                        exit($GC->alta($nom, $descripcio));
                    }
                    break;

                case 'modificar':
                    if ($id && $nom && $descripcio) {
                        exit($GC->modificar($id, $nom, $descripcio));
                    }
                    break;

                case 'eliminar':
                    if ($id) {
                        exit($GC->eliminar($id));
                    }
                    break;
            }
            break;
            /***********************************
            //Vlad, Josep s'ha intentat... no me fa la funcio "renquest" de custom.js(nose es tard(exactament/(les(4:40(.-.(ok))))))
            **********************************/
            //Fatal error: Uncaught ArgumentCountError: Too few arguments to function Incidencia::alta(), 2 passed in C:\Users\Andrei\github\uniproject12345\Uniproject\php\controller.php on line 62 and exactly 6 expected in C:\Users\Andrei\github\uniproject12345\Uniproject\php\incidencia.php:44 Stack trace: #0 C:\Users\Andrei\github\uniproject12345\Uniproject\php\controller.php(62): Incidencia->alta('asd', 'asd') #1 {main} thrown in C:\Users\Andrei\github\uniproject12345\Uniproject\php\incidencia.php on line 44 (al crear(estic imagecolortransparent))
        case 'incidencia':
          $GI = new Incidencia($DB->getDB());
          $id = $_POST['target'] ?? null;
          $nom = $_POST['nom'] ?? null;
          $descripcio = $_POST['descripcio'] ?? null;

          switch($action) {
              case 'alta':
                  if ($nom && $descripcio) {
                      exit($GI->alta($id, 'actiu', $nom,$descripcio, date('Y-m-d H:i:s')));
                  }
                  break;

              case 'modificar':
                  if ($id && $nom && $descripcio) {
                      exit($GI->modificar($id, $nom, $descripcio));
                  }
                  break;

              case 'eliminar':
                  if ($id) {
                      exit($GI->eliminar($id));
                  }
                  break;
          }
          break;
          case 'usuari':
            $GU = new Usuari($DB->getDB());
            $id = $_POST['target'] ?? null;
            $nom = $_POST['nom'] ?? null;
            $cognom = $_POST['cognom'] ?? null;
            $segonCognom = $_POST['segonCognom'] ?? null;
            $dni = $_POST['DNI'] ?? null;
            $userName = $_POST['UserName'] ?? null;
            $password = $_POST['password'] ?? null;
            $tipus = $_POST['tipus'] ?? null;
            $email = $_POST['email'] ?? null;
            $telefon = $_POST['telefon'] ?? null;
            $dataNaixement = $_POST['dataNaixement'] ?? null;


            switch($action) {
                case 'alta':
                    if ($nom && $cognom && $segonCognom && $dni && $userName && $password && $tipus && $email && $telefon && $dataNaixement) {
                        exit($GU->alta($nom, $cognom, $segonCognom, $dni, $userName, $password, $tipus, $email, $telefon, $dataNaixement));
                    }
                    break;

                case 'modificar':
                    if ($nom && $cognom && $segonCognom && $dni && $userName && $password && $tipus && $email && $telefon && $dataNaixement) {
                        exit($GU->modificar($id, $nom, $cognom, $segonCognom, $dni, $userName, $password, $tipus, $email, $telefon, $dataNaixement));
                    }
                    break;

                case 'eliminar':
                    if ($id) {
                        exit($GU->eliminar($id));
                    }
                    break;
            }
            break;
            case 'empresa':
              $GE = new Empresa($DB->getDB());
              $id = $_POST['target'] ?? null;
              $nom = $_POST['nom'] ?? null;
              $localitat = $_POST['localitat'] ?? null;
              $adreça = $_POST['adreça'] ?? null;
              $telefon = $_POST['telefon'] ?? null;
              $CIF = $_POST['CIF'] ?? null;
              $email = $_POST['email'] ?? null;

              switch($action) {
                  case 'alta':
                      if ($nom && $localitat && $adreça && $telefon && $CIF && $email) {
                          exit($GE->alta($nom, $localitat, $adreça, $telefon, $CIF, $email));
                      }
                      break;
                  case 'modificar':
                      if ($id && $nom && $nom && $localitat && $adreça && $telefon && $CIF && $email) {
                          exit($GE->modificar($id, $nom, $localitat, $adreça, $telefon, $CIF, $email));
                      }
                      break;

                  case 'eliminar':
                      if ($id) {
                          exit($GE->eliminar($id));
                      }
                      break;
              }
              break;
              case 'institut':
                $GIN = new Institut($DB->getDB());
                $id = $_POST['target'] ?? null;
                $nom = $_POST['nom'] ?? null;
                $localitat = $_POST['localitat'] ?? null;
                $adreça = $_POST['adreça'] ?? null;
                $telefon = $_POST['telefon'] ?? null;
                $CIF = $_POST['CIF'] ?? null;
                $email = $_POST['email'] ?? null;

                switch($action) {
                    case 'alta':
                        if ($nom && $localitat && $adreça && $telefon && $CIF && $email) {
                            exit($GIN->alta($nom, $localitat, $adreça, $telefon, $CIF, $email));
                        }
                        break;
                    case 'modificar':
                        if ($id && $nom && $nom && $localitat && $adreça && $telefon && $CIF && $email) {
                            exit($GIN->modificar($id, $nom, $localitat, $adreça, $telefon, $CIF, $email));
                        }
                        break;

                    case 'eliminar':
                        if ($id) {
                            exit($GIN->eliminar($id));
                        }
                        break;
                }
                break;
       }
   }

   exit('ERROR: Error inesperat');
?>
