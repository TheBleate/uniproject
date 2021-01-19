<?php
/* +------------------------------------+
   |        Variables constants         |
   +------------------------------------+ */


    // Ruta absoluta del directori root de l'aplicació
    define('ROOT_PATH', realpath(__DIR__. '/..'). '/');

    // Ruta relativa del directori root de l'aplicació
    define('ROOT_REL_PATH', (is_callable('comparePath') ? comparePath(ROOT_PATH, $_SERVER["PHP_SELF"]) : './'));

    // Ruta absoluta del directori CSS
    define('STYLES_PATH', ROOT_REL_PATH. 'css/');

    // Ruta absoluta del directori JavaScript
    define('SCRIPTS_PATH', ROOT_REL_PATH. 'js/');

    // Ruta absoluta del directori Views utilitzat per a la plantilla
    define('VIEWS_PATH', ROOT_PATH. 'views/');

    // Ruta absoluta del directori PHP
    define('PHP_PATH', ROOT_PATH. 'php/');

    // Ruta absoluta del directori PHP
    define('CONFIG_FILE', ROOT_PATH. 'php/config.php');

    // Nom del script PHP actual
    define('CURRENT_FILENAME', basename($_SERVER["PHP_SELF"], '.php'));

?>
