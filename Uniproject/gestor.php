<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">

    <?php $tab=2; $navbar=1; require_once('./template/navbar.php') ?>

    <main class="d-flex flex-row flex-grow-1">

        <!-- Sidebar -->
        <?php $tab=0; $navbar=0; require_once('./template/sidebar.php') ?>

        <!-- Page Content -->
        <div class="d-flex flex-column w-100">

            <!-- Begin page content -->
            <div class="container-fluid p-5">
                <h2 class="pb-5">Llistat d'usuaris</h2>
                <?php
                    require_once('./php/database.php');
                    require_once('./php/usuari.php');
                    $DB = new Database();
                    $USUARI = new Usuari($DB->getDB());
                    //intento de if :()
                    //if($idrol === "alumne"){}
                    $USUARI->llistar();
                ?>
            </div>
            <?php require_once('./template/footer.php'); ?>

            <!-- /#page-content-wrapper -->
            <?php
            //require_once('./php/suari.php');


                $nomusuari = (isset($_POST['nomusuari']) ? $_POST['nomusuari'] : null);
                $nom = (isset($_POST['nom']) ? $_POST['nom'] : null);
                $cognom = (isset($_POST['cognom']) ? $_POST['cognom'] : null);
                $cognom2 = (isset($_POST['cognom2']) ? $_POST['cognom2'] : null);
                $dni = (isset($_POST['DNI']) ? $_POST['DNI'] : null);
                $userName = (isset($_POST['UserName']) ? $_POST['UserName'] : null);
                $contrasenya = (isset($_POST['contrasenya']) ? $_POST['contrasenya'] : null);
                $tipus = (isset($_POST['$tipus']) ? $_POST['$tipus'] : null);
                $email = (isset($_POST['$email']) ? $_POST['$email'] : null);
                $telefon = (isset($_POST['$telefon']) ? $_POST['$telefon'] : null);
                $dataNaixement = (isset($_POST['$DataNaixement']) ? $_POST['$dataNaixement'] : null);


            ?>

        <!-- Modal button (se cambiara)
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-creacio">
          Crear (icona)
        </button> -->
        <!-- Modal de Creacio -->
        <div class="modal fade" id="modal-creacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Creacio d'usuaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <!--Formulari de creacio-->
                <form action=".php/.php" method="post">
                  <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="Cognom">Cognom</label>
                    <input type="text" class="form-control" name="Cognom" id="Cognom" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="SegonCognom">SegonCognom</label>
                    <input type="text" class="form-control" name="SegonCognom" id="SegonCognom" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="DNI">DNI</label>
                    <input type="text" class="form-control" id="DNI" placeholder="46294233C">
                  </div>
                  <div class="form-group">
                    <label for="UserName">UserName</label>
                    <input type="text" class="form-control" id="UserName" placeholder="Название1234">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" id="Password" placeholder="*******">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipus</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Alumne</option>
                      <option>Profesor</option>
                      <option>Empleat</option>
                      <option>Admin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input type="text" class="form-control" id="userEmail" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="Telefon">Telefon</label>
                    <input type="text" class="form-control" id="Telefon" placeholder="647768442">
                  </div>
                  <div class="form-group">
                    <label for="DataNaixement">Data de Naixement</label><br>
                    <!-- tipus data¿ -->

                    <input type="date" id="DataNaixement" name="DataNaixement" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                    <span class="validity"></span>
                  </div>
                  <!-- Estat Sempre actiu(perque crees l'user .-.) -->


                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Crear</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal de Eliminacio
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-eliminacio">
          Eliminar (icona)
        </button>-->
        <!-- Modal de Eliminacio-->
        <div class="modal fade" id="modal-eliminacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar usuari</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p> Segur que vols eliminar aquest usuari? </p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Eliminar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal de Modificacio
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-modificacio">
          Modificar (icona)
        </button> -->
        <!-- Modal de Modificacio -->
        <div class="modal fade" id="modal-modificacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modificar usuari</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="name">Nom</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="Cognom">Cognom</label>
                      <input type="text" class="form-control" name="Cognom" id="Cognom" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="SegonCognom">SegonCognom</label>
                      <input type="text" class="form-control" name="SegonCognom" id="SegonCognom" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="DNI">DNI</label>
                      <input type="text" class="form-control" id="DNI" placeholder="46294233C">
                    </div>
                    <div class="form-group">
                      <label for="UserName">UserName</label>
                      <input type="text" class="form-control" id="UserName" placeholder="Название1234">
                    </div>
                    <div class="form-group">
                      <label for="Password">Password</label>
                      <input type="text" class="form-control" id="Password" placeholder="*********">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Tipus</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>Alumne</option>
                        <option>Profesor</option>
                        <option>Empleat</option>
                        <option>Admin</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="userEmail">Email</label>
                      <input type="text" class="form-control" id="userEmail" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="Telefon">Telefon</label>
                      <input type="text" class="form-control" id="Telefon" placeholder="647768442">
                    </div>
                    <div class="form-group">
                      <label for="DataNaixement">Data de Naixement</label><br>
                      <!-- tipus data¿ -->

                      <input type="date" id="DataNaixement" name="DataNaixement" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                      <span class="validity"></span>
                    </div>
                    <!-- Estat Sempre actiu(perque crees l'user .-.) -->


                  </form>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Modificar</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->



  </body>
</html>
