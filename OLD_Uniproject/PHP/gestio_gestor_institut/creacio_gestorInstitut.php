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
  <h2 class ="h2_creacio">Creació dels gestors d'Instituts</h2>
  <p class ="p_creacio">Crea els gestors d'instituts d'UniProject</p>
  <form action="dades_creacio_gestorInstitut.php" method="post">
    <div class="flexbox-container">
      <label for="idRol">idRol</label>
      <br>
      <input type="text" name="idRol"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Nom">Nom</label>
      <br>
      <input type="text" name="Nom"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Cognom">Cognom</label>
      <br>
      <input type="text" name="Cognom"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="SegonCognom">SegonCognom</label>
      <br>
      <input type="text" name="SegonCognom"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="DNI">DNI</label>
      <br>
      <input type="text" name="DNI"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Username">Username</label>
      <br>
      <input type="text" name="Username"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Password">Password</label>
      <br>
      <input type="password" name="Password"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="GestorInstitut">GestorInstitut</label>
      <br>
      <input type="text" name="GestorInstitut"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Email">Email</label>
      <br>
      <input type="text" name="Email"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Telefon">Telefon</label>
      <br>
      <input type="text" name="Telefon"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="Data_naixement">Data_naixement</label>
      <br>
      <input type="text" name="Data_naixement"></input>
      <br>
    </div>

    <input class="boto" type="submit" value="Enviar" name="button"></input>
  </form>
  <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
</body>
</html>
