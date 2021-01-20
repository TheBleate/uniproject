<?php
    // Metodes
    function comparePath($path1, $path2) {
        $path1 = explode('/', $path1);
        $path2 = explode('/', $path2);

        return implode('/', array_intersect($path1, $path2));
    }
?>
