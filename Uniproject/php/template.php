<?php

    require_once(realpath(__DIR__. '/helpers.php'));
    require_once(realpath(__DIR__. '/const.php'));

    // Metode utilitzat per implementar Views
    function view($view) {

        $args = [];

        for($i=1;$i<func_num_args();$i++) {
            $args[] = func_get_arg($i);
        }

        include_once(VIEWS_PATH. $view. '.php');

        unset($args);
    }


?>
