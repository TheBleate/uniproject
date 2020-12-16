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
<?php

require_once('GestorInstitut.php');
session_start();

$projecte_a_modificar = $_SESSION['GestorInstitut'] [$_POST['id_nou']];


?>
    <h2 class ="h2_creacio">Modificació dels gestors d'Instituts</h2>
    <p class ="p_creacio">Modifica els gestors dels instituts.</p>
    <form action="dades_modificacio_gestorInstitut.php" method="post">

      <div class="flexbox-container">
        <label for="idRol_nou">idRol nou</label>
        <br>
        <input type="text" name="idRol_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="nom_nou">Nom nou</label>
        <br>
        <input type="text" name="nom_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Cognom_nou">Cognom nou</label>
        <br>
        <input type="text" name="Cognom_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="SegonCognom_nou">Segon Cognom nou</label>
        <br>
        <input type="text" name="SegonCognom_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="DNI_nou">DNI nou</label>
        <br>
        <input type="text" name="DNI_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Username_nou">Username nou</label>
        <br>
        <input type="text" name="Username_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Password_nou">Password nou</label>
        <br>
        <input type="password" name="Password_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="GestorInstitut_nou">GestorInstitut nou</label>
        <br>
        <input type="text" name="GestorInstitut_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Email_nou">Email nou</label>
        <br>
        <input type="text" name="Email_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Telefon_nou">Telefon nou</label>
        <br>
        <input type="text" name="Telefon_nou"></input>
        <br>
      </div>
      <div class="flexbox-container">
        <label for="Data_naixement_nou">Data de naixement nou</label>
        <br>
        <input type="text" name="Data_naixement_nou"></input>
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
  require_once 'GestorInstitut.php';
  session_start();
  GestorInstitut::llistarGestorInstitut();
?>
