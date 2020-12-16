<!DOCTYPE html>
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
    <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
  </body>
</html>

<?php
  require_once 'GestorEmpresa.php';
  session_start();
  $nom = $_POST['nom'];
  $usuari = $_POST['usuari'];
  $contrasenya = $_POST['contrasenya'];
  $gestor = new GestorEmpresa($nom,$usuari, $contrasenya);
  echo "<pre>",var_dump($_SESSION['GestorEmpresa']),"<pre>";
 ?>
