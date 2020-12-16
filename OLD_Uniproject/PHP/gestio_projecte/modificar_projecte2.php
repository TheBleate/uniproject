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
<a name="titolprincipi"><h1 class="titolprincipal">Llistat de Projectes</h1></a>

<!--CODI PHP-->
<?php
require_once('class_projecte.php');
session_start();

    //Desem el resultat de la posició de l'array a un objecte
    //Haurem d'utilitzar el get per a poder rebre les variables ja que estan en "private"
    $projecte_a_modificar = $_SESSION['projecte'][$_POST['identificador']];
?>

<form action="modificar_projecte3.php" method="post">

<form>
    <div class = "flexbox-container">
        <input id="identificador" name="identificador" type="hidden" value="<?php echo $_POST['identificador'];?>">

        <div>
            <label for = "nom">Nom del projecte</label>
            <br>
            <input type="text" id="nom" name="nom" placeholder="Introduir nom del projecte" value="<?php echo $projecte_a_modificar->getNom();?>" required></input>
        </div>

        <br>

        <div>
            <label for = "nom centre">Nom Centre o Empresa</label>
            <br>
            <input type="text" id="nom_empresa_centre" name="nom_empresa_centre" placeholder="nom_empresa_centre" value="<?php echo $projecte_a_modificar->getNom_empresa_centre()?>" required></input>
        </div>

        <br>

        <div>
            <label class="columna_esquerra" for = "telefon">Telèfon</label>
            <br>
            <input class="columna_dreta" type="tel" id="telefon" name="telefon" placeholder="Introduir telèfon" value="<?php echo $projecte_a_modificar->getTelefon();?>" required></input>
        </div>

        <br>

        <div>
            <label  class="columna_esquerra" for = "email">Email</label>
            <br>
            <input class="columna_dreta" type="email" id="email" name="email" placeholder="Introduir email" value="<?php echo $projecte_a_modificar->getEmail();?>" required></input>
        </div>

        <br>

        <div>
            <label  class="columna_esquerra" for = "municipi">Municipi</label>
            <br>
            <!--<select id="municipi" name="municipi" value="<?php echo $projecte_a_modificar->getMunicipi();?>">
                <option>Amposta</option>
                <option>Alcanar</option>
                <option>Tortosa</option>
            </select>-->
            <input class="columna_dreta" type="text" id="municipi" name="municipi" placeholder="Introduir Municipi" value="<?php echo $projecte_a_modificar->getMunicipi();?>" required></input>
        </div>

        <br>

        <div>
            <label  class="columna_esquerra" for = "categoria">Categoria</label>
            <br>
            <!--<select id="categoria" name="categoria" value="<?php echo $projecte_a_modificar->getCategoria();?>">
                <option>Tecnologia</option>
                <option>Agricultura</option>
                <option>Comerç</option>
            </select>-->
            <input class="columna_dreta" type="text" id="categoria" name="categoria" placeholder="Introduir email" value="<?php echo $projecte_a_modificar->getCategoria();?>" required></input>
        </div>

        <br>

        <div>
            <label  class="columna_esquerra" for = "comentari">Comentari</label>
            <br>
            <input class="columna_dreta" type="text" id="comentari" name="comentari" placeholder="Introduir Comentari" value="<?php echo $projecte_a_modificar->getComentari();?>" required></input>
        </div>
        <br>
        <button class="botoblau" name="enviar">Enviar</button>
    </div>
  </form>

  <p class ="text_pagina">Altres opcions</p>
  <br>
  <form>
  <button type="submit" class="botoroig" formaction="../../creacio_projecte.html" required>Crear</button>
  <button type="submit" class="botoroig" formaction="llistar_projecte.php" required>Llistar</button>
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
