<?php
    require_once('./php/config.php');

    class Database {
        private $DB;

        //Getter de la connexió a la Base de Dades
        public function getDB() {
            return $this->DB;
        }

        public function validar($nomusuari, $contraseña) {
            $user = $this->consultaUsuari($nomusuari);
            //Comprovem si l'usuari és correcte
            //Agafem la seva contrasenya i comparem si es la mateixa i igual tipus
            //Guardem el id de l'usuari a la cookie i retorna true, que significa que s'ha autenticat
            //var_dump($user);

            if ($user) {
                if ($user['Contraseña'] === $contraseña && $user['Estat'] !== 'inactiu') {
                    return array_intersect_key($user, array('idUsuari','idRol','Nom','Cognom','SegonCognom','Username','Tipus','Email'));
                }
            }

            return false;
        }

        //Evitem una injecció sql i fem una consulta si existeix l'usuari
        //preg_match encaixa una plantilla anti-injeccions sql
        public function consultaUsuari($nomusuari) {
            if (preg_match('/^[\w\d]{0,20}$/', $nomusuari)) {

                $query = 'SELECT * FROM Usuari WHERE UserName = "'. $nomusuari. '";';
                //guardem a $user el resultat de l'objecte de la query (dades, quantitat de camps...)
                $user = $this->DB->query($query);

                //Pilla tots els camps i els guarda com si fos un array
                if (mysqli_num_rows($user)>0) {

                    $user = $user->fetch_row();

                    $data = array(
                        'idUsuari' => $user[0],
                        'idRol' => $user[1],
                        'nom' => $user[2],
                        'cognom' => $user[3],
                        'segonCognom' => $user[4],
                        'dni' =>  $user[5],
                        'username' => $user[6],
                        'contrasenya' => $user[7],
                        'tipus' => $user[8],
                        'email' => $user[9],
                        'telefon' => $user[10],
                        'dataNaixement' => $user[11],
                        'estat' => $user[12]
                    );

                    switch($data['tipus']) {
                        case 'Alumne':
                            break;
                        case 'Professor':
                            break;
                        case 'Gerent':
                            break;
                        case 'Empleat':
                            break;
                    }

                    return $data;

                }
            }

            return false;
        }

        //@author Method(consultarUsuariId) Andrei Halauca
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

        function __construct() {
            $this->DB = new mysqli(DB_ADDRESS, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            //session_start();
            if (!$this->DB) {
                exit('Base de dades inaccessible');
            }
        }

    }
?>
