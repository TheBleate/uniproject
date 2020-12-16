<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
  <link href="../../CSS/GestorCentral.css"rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <form action="dades_modificacio_gestorEmpresa.php" method="post">
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
require_once 'GestorEmpresa.php';
session_start();
GestorEmpresa::llistarGestorEmpresa();
?>
