<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
  <link href="../../CSS/GestorEmpresa.css"rel="stylesheet" type="text/css">
  <link rel="shortcut icon" type="image/png" href="imatges/message-chat-bubble-1_108543.png">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
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

    <form action="dades_eliminacio_gestorEmpresa.php" method="post">
      <label for="elimina_nom">Posa l'id a eliminar</label>
      <br>
      <input type="text" name="id"></input>
      <br>
      <input type="submit" value="Enviar" name="button"></input>
    </form>
    <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
  </body>
</html>
<?php
require_once 'GestorEmpresa.php';
session_start();
GestorEmpresa::llistarGestorEmpresa();
?>
