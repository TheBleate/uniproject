<?php
    require_once('./php/config.php');

    class Database {
        private $DB;

        //Getter de la connexió a la Base de Dades
        public function getDB() {
            return $this->DB;
        }

        public function validar($nomusuari, $password) {
            $user = $this->consultaUsuari($nomusuari, false);
            if ($user) {
                if ($user['Password'] === $password && $user['Estat'] !== 'inactiu') {
                    return $user;
                }
            }
            return false;
        }

        public function consultaUsuari($input, $type = true) {
            //if (preg_match('/^[\w\d]{0,20}$/', $nomusuari)) {
            $query = ($type ? 'SELECT * FROM Usuari WHERE idUsuari = "'. $input.'";' : 'SELECT * FROM Usuari WHERE UserName = "'. $input.'";' );
            //guardem a $user el resultat de l'objecte de la query (dades, quantitat de camps...)
            $user = $this->DB->query($query)->fetch_assoc();
            //Pilla tots els camps i els guarda com si fos un array
            if ($user) {
                switch($user['Tipus']) {
                    case 'Alumne':
                        $query = 'SELECT idAlumne,CodiAlumne FROM Alumne WHERE idUsuari = "'. $user['idUsuari'].'";';
                        break;
                    case 'Professor':
                        $query = 'SELECT idProfessor,CodiProfessor FROM Professor WHERE idUsuari = "'. $user['idUsuari'].'";';
                        break;
                    case 'Gerent':
                        $query = 'SELECT idGerent FROM Professor WHERE Gerent = "'. $user['idUsuari'].'";';
                        break;
                    case 'Empleat':
                        $query = 'SELECT idEmpleat, NSS FROM Empleat WHERE idUsuari = "'. $user['idUsuari'].'";';
                        break;
                }

                $user = array_merge($user, $this->DB->query($query)->fetch_assoc() ?? []);

                return $user;

            }

            return false;
        }

        //@author Method(consultarUsuariId) Andrei Halauca
        /*
        public function consultarUsuariId($idUsuari) {
            $query = 'SELECT * FROM Usuari WHERE idUsuari = "'.$idUsuari.'";';
            $user = $this->DB->query($query);
            if ($user) {
                $user = $user->fetch_row();
                switch($user[8]) {
                    case 'Alumne':
                        return array('idUsuari' => $user[0], 'idRol' => $user[1], 'Nom' => $user[2], 'Cognom' => $user[3], 'SegonCognom' => $user[4], 'DNI' =>  $user[5], 'Username' => $user[6], 'Contraseña' => $user[7], 'Tipus' => $user[8], 'Email' => $user[9], 'Telefon' => $user[10], '$dataNaixement' => $user[11], 'Estat' => $user[12]);
                        break;
                    case 'Professor':
                        return array('idUsuari' => $user[0], 'idRol' => $user[1], 'Nom' => $user[2], 'Cognom' => $user[3], 'SegonCognom' => $user[4], 'DNI' =>  $user[5], 'Username' => $user[6], 'Contraseña' => $user[7], 'Tipus' => $user[8], 'Email' => $user[9], 'Telefon' => $user[10], '$dataNaixement' => $user[11], 'Estat' => $user[12]);
                        break;
                }
            }
        }
        */

        function __construct() {
            $this->DB = new mysqli(DB_ADDRESS, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            //session_start();
            if (!$this->DB) {
                exit('Base de dades inaccessible');
            }
        }

    }
?>
