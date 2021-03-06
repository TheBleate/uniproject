<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="../../CSS/creacio_projecte.css"rel="stylesheet" type="text/css">
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
    <h2 class ="h2_creacio">Modificació dels gestors d'Instituts</h2>
    <p class ="p_creacio">Modifica els gestors dels instituts.</p>
    <form action="dades_modificacio_incidencia.php" method="post">
      <div class="flexbox-container">
        <label for="id_incidencia">Posa l'id a modificar</label>
        <br>
        <input type="text" name="id_incidencia"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="incidencia_nova">Nom nou</label>
        <br>
        <input type="text" name="incidencia_nova"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="descripcio_nova">Descripció nova</label>
        <br>
        <input type="text" name="descripcio_nova"></input>
        <br>
      </div>
      <input class="boto" type="submit" value="Enviar" name="button"></input>
      <br>
      <br>
    </form>
    <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
  </body>
</html>

<?php
require_once 'Incidencia.php';
session_start();
Incidencia::llistarIncidencia();
?>
