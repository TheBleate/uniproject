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
                <h2 class="pb-5">Llistat d'incidencies</h2>
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
                $Descripcio = (isset($_POST['Descripcio']) ? $_POST['Descripcio'] : null);

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
                <h5 class="modal-title" id="staticBackdropLabel">Creacio d'instituts</h5>
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
                    <label for="Descripcio">Descripcio</label>
                    <input type="text" class="form-control" name="Descripcio" id="Descripcio" placeholder="Название">
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
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar incidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p> Segur que vols eliminar aquesta incidencia? </p>


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
                <h5 class="modal-title" id="staticBackdropLabel">Modificar incidencia</h5>
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
                      <label for="Descripcio">Descripcio</label>
                      <input type="text" class="form-control" name="Descripcio" id="Descripcio" placeholder="Название">
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
