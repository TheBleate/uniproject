<!DOCTYPE html>
<html>
<head>
   <!-- /opt/lampp/share/xampp-control-panel/xampp-control-panel -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href="../../CSS/GestorCategoria.css"rel="stylesheet" type="text/css">
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
  <form action="dades_creacio_gestorCategoria.php" method="post">
    <label for="nom">Nom</label>
    <br>
    <input type="text" name="nom"></input>
    <br>
    <input type="submit" value="Enviar" name="button"></input>
    <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
  </form>
</body>
</html>
