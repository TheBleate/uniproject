<!doctype html>
<html lang="en" class="h-100">

  <?php
    // S'ha de afegir aquest require a qualsevol pagina que fagi us de les views
    require_once('./php/template.php');
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
                <h2 class="pb-5">Llistat d'empreses</h2>
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

                require_once('./php/database.php');
                require_once('./php/usuari.php');

                $DB = new Database();


                $Nom = (isset($_POST['Nom']) ? $_POST['Nom'] : null);
                $Adresa = (isset($_POST['Adresa']) ? $_POST['Adresa'] : null);
                $Localitat = (isset($_POST['Localitat']) ? $_POST['Localitat'] : null);
                $Telefon = (isset($_POST['Telefon']) ? $_POST['Telefon'] : null);
                $CIF = (isset($_POST['CIF']) ? $_POST['CIF'] : null);
                $Email = (isset($_POST['Email']) ? $_POST['Email'] : null);

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
                <h5 class="modal-title" id="staticBackdropLabel">Creacio d'empreses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <!--Formulari de creacio-->
                <form action=".???????" method="post">
                  <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="Localitat">Localitat</label>
                    <input type="text" class="form-control" name="Localitat" id="Localitat" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="Adreça">Adreça</label>
                    <input type="text" class="form-control" name="Adreça" id="Adreça" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="Telefon">Telefon</label>
                    <input type="text" class="form-control" name="Telefon" id="Telefon" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="CIF">CIF</label>
                    <input type="text" class="form-control" name="CIF" id="CIF" placeholder="Название">
                  </div>
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" id="Email" placeholder="Название">
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
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p> Segur que vols eliminar aquesta empresa? </p>


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
                <h5 class="modal-title" id="staticBackdropLabel">Modificar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="Localitat">Localitat</label>
                      <input type="text" class="form-control" name="Localitat" id="Localitat" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="Adreça">Adreça</label>
                      <input type="text" class="form-control" name="Adreça" id="Adreça" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="Telefon">Telefon</label>
                      <input type="text" class="form-control" name="Telefon" id="Telefon" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="CIF">CIF</label>
                      <input type="text" class="form-control" name="CIF" id="CIF" placeholder="Название">
                    </div>
                    <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="text" class="form-control" name="Email" id="Email" placeholder="Название">
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
    <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

  </body>
</html>
