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
  <h2 class ="h2_creacio">Creació dels centres</h2>
  <form action="CrearInstitut.php" method="post">
    <div class="flexbox-container">
      <label for="nom">Nom del centre</label>
      <br>
      <input type="text" name="nom"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="localitat">Localitat</label>
      <br>
      <input type="text" name="localitat"></input>
      <br>
    </div>
    <div class="flexbox-container">
      <label for="email">Email</label>
      <br>
      <input type="text" name="email"></input>
      <br>
    </div>
      <div class="flexbox-container">
          <label for="telefon">Telèfon</label>
          <br>
          <input type="text" name="telefon"></input>
          <br>
      </div>
      <br>
    <input class="boto" type="submit" value="Crear" name="button"></input>
  </form>
  <br>
  <a href="../../Gestions.html"><input type="submit" value="Torna al principi" name="button"></input>
  <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
</body>
</html>
