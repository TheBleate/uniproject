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
                <h2 class="pb-5">Llistat d'incidencies</h2>
                <?php
                    require_once('./php/database.php');
                    require_once('./php/incidencia.php');
                    $DB = new Database();
                    $Incidencia = new Incidencia($DB->getDB());
                    //intento de if :()
                    //if($idrol === "alumne"){}
                    //var_dump($_SESSION['usuari_actual']);
                    $Incidencia->llistar($_SESSION['usuari_actual']['idUsuari']);

                ?>
            </div>

            <!-- /#page-content-wrapper -->
            <?php
                $Nom = (isset($_POST['nom']) ? $_POST['nom'] : null);
                $Descripcio = (isset($_POST['descripcio']) ? $_POST['descripcio'] : null);
            ?>

        <!-- Modal button (se cambiara)
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-creacio">
          Crear (icona)
        </button> -->
        <!-- Modal de Creacio -->
        <div class="modal fade" id="modal-creacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id = "crud-alta" method="post" data-crud="incidencia">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Creacio d'instituts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <!--Formulari de creacio-->
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Problema 1">
                  </div>
                  <div class="form-group">
                    <label for="descripcio">Descripcio</label>
                    <!--//text area -->
                    <textarea type="text" class="form-control" name="descripcio" id="descripcio" placeholder="El problema ....."></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
              </div>
              </form>
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
                <form id="crud-eliminar" method="post" data-crud="incidencia">
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
                <button type="submit" class="btn btn-primary">Eliminar</button>
              </div>
               </form>
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
                <form id = "crud-modificar" method="post" data-crud="incidencia">

              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modificar incidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Problema 1">
                      </div>
                      <div class="form-group">
                        <label for="descripcio">Descripcio</label>
                        <!--//text area -->
                        <textarea type="text" class="form-control" name="descripcio" id="descripcio" placeholder="El problema ....."></textarea>
                        <!-- <span class="comprovacio py-1">Hola mundo</span> -->
                    <!-- Estat Sempre actiu(perque crees l'user .-.) -->
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Modificar</button>
              </div>
               </form>
            </div>
          </div>
        </div>
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

  </body>
</html>
