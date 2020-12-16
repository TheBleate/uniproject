<!DOCTYPE html>
<html>
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
    require_once '../../classes/Institut.php';
    session_start();
    $nom = $_POST['nom'];
    $localitat = $_POST['localitat'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    if($nom != "" && $localitat != "" && $email != "" && $telefon != ""){
      $centre = new Institut($nom,$localitat, $email, $telefon);
      echo "El centre s'ha creat correctament";
    }
    else {
      echo "No  s'ha pogut crear el centre";
    }
   ?>
  <a href="../../Gestions.html"><input type="submit" value="Torna al principi" name="button"></input>
  <script src="../../JAVASCRIPT/creacio_projecte.js" language="javascript" type="text/javascript"></script>
</body>
</html>
