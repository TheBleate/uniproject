<!doctype html>
<html lang="en" class="h-100">

  <?php
    // S'ha de afegir aquest require a qualsevol pagina que fagi us de les views
    require_once('./php/template.php');
    require_once(PHP_PATH. 'database.php');

    $DB = new Database();

    if (!isset($_SESSION['usuari_actual'])) {
        header('HTTP/1.0 403 Forbidden', true, 403);
        exit;
    }

  ?>
  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->

  <?php view('header'); ?>

  <body class="d-flex flex-column h-100">

    <?php view('navbar', 1); ?>

    <main class="d-flex flex-row flex-grow-1">

        <!-- Sidebar -->
        <?php view('sidebar', 0); ?>

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

            <!-- /#page-content-wrapper -->

            <?php
                //$nomusuari = (isset($_POST['nomusuari']) ? $_POST['nomusuari'] : null);
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
        </button>-->
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
                <form action="alta()" method="post">
                <form>
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="cognom">Cognom</label>
                    <input type="text" class="form-control" name="cognom" id="cognom" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="cognom2">Segon Cognom</label>
                    <input type="text" class="form-control" name="cognom2" id="cognom2" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="DNI">DNI</label>
                    <input type="text" class="form-control" name ="DNI" id="DNI" placeholder="46294233C">
                  </div>
                  <div class="form-group">
                    <label for="UserName">Nom d'usuari</label>
                    <input type="text" class="form-control" name ="UserName" id="UserName" placeholder="Название1234">
                  </div>
                  <div class="form-group">
                    <label for="Contrasenya">Contrasenya</label>
                    <input type="text" class="form-control" name="Contrasenya" id="Contrasenya" placeholder="*******">
                  </div>
                  <div class="form-group">
                    <label for="tipus">Tipus</label>
                    <select class="form-control" name = "tipus" id="exampleFormControlSelect1">
                      <option>Alumne</option>
                      <option>Profesor</option>
                      <option>Gestor</option>
                      <option>Empleat</option>
                      <option>Admin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name = "email" id="email" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" name = "telefon" id="telefon" placeholder="647768442">
                  </div>
                  <div class="form-group">
                    <label for="dataNaixement">Data de Naixement</label><br>
                    <!-- tipus data¿ -->
                    <input type="date" id="dataNaixement" name="dataNaixement" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
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
                  <form action="modificar()" method="post">
                  <form>
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" name="nom" id="nom" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="cognom">Cognom</label>
                      <input type="text" class="form-control" name="cognom" id="cognom" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="cognom2">Segon Cognom</label>
                      <input type="text" class="form-control" name="cognom2" id="cognom2" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="DNI">DNI</label>
                      <input type="text" class="form-control" name ="DNI" id="DNI" placeholder="46294233C">
                    </div>
                    <div class="form-group">
                      <label for="UserName">Nom d'usuari</label>
                      <input type="text" class="form-control" name ="UserName" id="UserName" placeholder="Название1234">
                    </div>
                    <div class="form-group">
                      <label for="Contrasenya">Contrasenya</label>
                      <input type="text" class="form-control" name="Contrasenya" id="Contrasenya" placeholder="*******">
                    </div>
                    <div class="form-group">
                      <label for="tipus">Tipus</label>
                      <select class="form-control" name = "tipus" id="exampleFormControlSelect1">
                        <option>Alumne</option>
                        <option>Profesor</option>
                        <option>Gestor</option>
                        <option>Empleat</option>
                        <option>Admin</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name = "email" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="telefon">Telefon</label>
                      <input type="text" class="form-control" name = "telefon" id="telefon" placeholder="647768442">
                    </div>
                    <div class="form-group">
                      <label for="dataNaixement">Data de Naixement</label><br>
                      <!-- tipus data¿ -->
                      <input type="date" id="dataNaixement" name="dataNaixement" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                      <span class="validity"></span>
                    </div>
                    <!-- Estat Sempre actiu(perque crees l'user .-.) -->


                  </form>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

  </body>
</html>
