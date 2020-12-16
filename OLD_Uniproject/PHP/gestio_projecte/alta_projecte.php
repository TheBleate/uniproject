<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Tots els CSS son reutilitzats-->
  <link href="../../CSS/creacio.css"rel="stylesheet" type="text/css">
  <!--Agafem el CSS para la taula U(creacio_empresa.css)-->
  <link href="../../CSS/creacio_empresa.css"rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../../CSS/gestio.css">
  <LINK rel="shortcut icon" type="image/png" href="../../imatges/message-chat-bubble-1_108543.png">
  <link href="../../CSS/paginicial.css"rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/message-chat-bubble-1_108543.png">
  <title>Uniproject</title>
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
          <li><a href="../../acces.html">Accedeix</a></li>
      </ul>
      <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </div>
  </nav>


<!--Una altra separació amb body-->


<div>
<a name="titolprincipi"><h1 class="titolprincipal">Creació de Projecte</h1></a>

<!--CODI PHP-->
<?php
    //indiquem que requerim el fitxer class_projecte.php
    require_once('class_projecte.php');

    //"iniciem sessió", el que mantindrà les arrays al mateix navegador
    session_start();

    //Totes les variables quals desem el contingut
    $nom_projecte = $_POST['nom_projecte'];
    $nom_empresa_centre = $_POST['nom_empresa_centre'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $municipi = $_POST['municipi'];
    $categoria = $_POST['categoria'];
    $comentari = $_POST['comentari'];

    //Creació del objecte projecte
    $prova = new projecte($nom_projecte, $nom_empresa_centre, $telefon, $email, $municipi, $categoria, $comentari);

    projecte::llistar();
    echo "<br>";
    echo "Consulta la llista si s'ha creat correctament el projecte";
    echo "<br>";
    echo "Dades introduides:";
    echo "<br>";
    echo "Nom usuari: ".$nom_projecte." Localitat: ".$localitat." Telefon: ".$telefon." Email: ".$email;
    echo "<br>";
    echo "Municipi: ".$municipi." Categoria: ".$categoria;
    echo "<br>";
    echo "Comentari: ".$comentari;
?>

  <p class ="text_pagina">Altres opcions</p>
  <br>
  <form>
  <button type="submit" class="botoroig" formaction="../../creacio_projecte.html" required>Crear</button>
  <button type="submit" class="botoroig" formaction="modificar_projecte1.php" required>Modificar</button>
  <button type="submit" class="botoroig" formaction="eliminar_projecte.php" required>Eliminar</button>
  <br>
</div>
</body>


<div>
    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="column1">
                    <h1>UniProject</h1>
                    <p>Nosaltres creiem en les teves capacitats i per això et facilitem les eines <br>
                    per a la creació de propostes i projectes conjuntament amb altres empreses i centres.
                    </p>
                </div>
                <div class="column2">
                    <h1>Menú</h1>
                    <div class="menufooter">
                        <ul class="links-nav">
                            <li><a href="index.html">Inici</a></li><br>
                            <li><a href="gestio.html">Gestions</a></li><br>
                            <li><a href="mapa.html">Mapa</a></li><br>
                            <li><a href="acces.html">Acces.html</a></li><br>
                        </ul>
                    </div>
                </div>
                <div class="column3">
                    <h1>Informació de contacte</h1>
                    <div class="row2">
                        <img src="">
                        <label>UniProject,
                            Carrer Madrid, 35, 49,
                            43870 Amposta <br></label>
                    </div>

                    <div class="row2">
                        <img src="">
                        <label>Telf. 977700043 <br></label>
                    </div>

                    <div class="row2">
                        <img src="">
                        <label>uniproject@gmail.com <br></label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container_footer">
                <div class="footer">
                    <div class="copyright">
                        © 2020 Tots els drets reservats |
                    </div>
                    <div class="informacio_politica">
                        Informació companya | Privacio i Politica | Termins i Condicions
                    </div>
                </div>
            </div>
    </footer>
</div>

<!--Indiquem el fitxer Javascript-->
<script src="JAVASCRIPT/app.js"></script>

</html>
