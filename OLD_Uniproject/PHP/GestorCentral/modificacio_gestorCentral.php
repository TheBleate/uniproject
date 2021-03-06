<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="../../CSS/GestorCentral.css"rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="imatges/message-chat-bubble-1_108543.png">
    <title>Uniproject</title>
  </head>
  <body>
	  <header>
      <nav>
        <div class="logo">
          <h4>UniProject</h4>
        </div>
        <ul class="nav-links">
          <li><a href="../../index.html">Inici</a></li>
          <li><a href="../../gestio.html">Gestions</a></li>
          <li><a href="../../mapa.html">Mapa</a></li>
          <li><a href="../../acces.html">Accedeix</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
    <form action="dades_modificacio_gestorCentral.php" method="post">
      <label for="nom_actual">Posa l'id a modificar</label>
      <br>
      <input type="text" name="id"></input>
      <br>
      <label for="nom_nou">nom nou</label>
      <br>
      <input type="text" name="nom_nou"></input>
      <br>
      <label for="usuari_nou">Usuari nou</label>
      <br>
      <input type="text" name="usuari_nou"></input>
      <br>
      <label for="nom_nou">Contrasenya nova</label>
      <br>
      <input type="password" name="contrasenya_nova"></input>
      <br>
      <input type="submit" value="Enviar" name="button"></input>
      <br>
      <br>
    </form>
  </body>
</html>

<?php
require_once 'GestorCentral.php';
session_start();
GestorCentral::llistarGestorCentral();
?>
