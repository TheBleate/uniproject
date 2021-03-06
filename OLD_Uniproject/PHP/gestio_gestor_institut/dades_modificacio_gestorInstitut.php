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
          <li><a href="mapa.html">Mapa</a></li>
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
    require_once 'GestorInstitut.php';
    session_start();
    GestorInstitut::modificarGestorInstitut($_POST['id'],$_POST['idRol'], $_POST['Nom'], $_POST['Cognom'], $_POST['SegonCognom'], $_POST['DNI'], $_POST['Username'], $_POST['Password'], $_POST['GestorInstitut'], $_POST['Email'], $_POST['Telefon'], $_POST['Data_naixement']);
    GestorInstitut::llistarGestorInstitut();
    ?>
    <a href="../../gestorInstitut.html"><input type="submit" value="Torna al principi" name="button"></input>
  </body>
  <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
</html>
