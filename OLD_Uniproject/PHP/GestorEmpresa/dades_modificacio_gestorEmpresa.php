<?php
require_once 'GestorEmpresa.php';
session_start();
GestorEmpresa::modificarGestorEmpresa($_POST['id'],$_POST['nom_nou'],$_POST['usuari_nou'], $_POST['contrasenya_nova']);
GestorEmpresa::llistarGestorEmpresa();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href="../../CSS/GestorEmpresa.css"rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/png" href="imatges/message-chat-bubble-1_108543.png">
  </head>
  <body>
	  <nav>
        <div class="logo">
            <h4>UniProject</h4>
        </div>
        <ul class="nav-links">
            <li><a href="../../index.html">Inici</a></li>
            <li><a href="../../gestio.html">Gestions</a></li>
            <li><a href="../../mapa.html">Mapa</a></li>
            <li><a href="../../acces.html">Contacte</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <a href="../../gestorEmpresa.html"><input type="submit" value="Torna al principi" name="button"></input>
    <script src="JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
  </body>
</html>
