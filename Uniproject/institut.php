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
                <h2 class="pb-5">Llistat d'instituts</h2>
                <?php
                    require_once('./php/database.php');
                    require_once('./php/institut.php');
                    $DB = new Database();
                    $Institut = new institut($DB->getDB());
                    //intento de if :()
                    //if($idrol === "alumne"){}
                    $Institut->llistar();
                ?>
            </div>
            <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
            <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>
            <!-- /#page-content-wrapper -->
            <?php
                $Nom = (isset($_POST['nom']) ? $_POST['nom'] : null);
                $Localitat = (isset($_POST['localitat']) ? $_POST['localitat'] : null);
                $Adreça = (isset($_POST['adreça']) ? $_POST['adreça'] : null);
                $Telefon = (isset($_POST['telefon']) ? $_POST['telefon'] : null);
                $CIF = (isset($_POST['cif']) ? $_POST['cif'] : null);
                $Email = (isset($_POST['email']) ? $_POST['email'] : null);

            ?>
        <!-- Modal button (se cambiara)
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-creacio">
          Crear (icona)
        </button> -->
        <!-- Modal de Creacio -->
        <div class="modal fade" id="modal-creacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="crud-alta-institut" method="post">
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
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="IES Montsia">
                  </div>
                  <div class="form-group">
                    <label for="localitat">Localitat</label>
                    <input type="text" class="form-control" name="localitat" id="localitat" placeholder="Amposta">
                  </div>
                  <div class="form-group">
                    <label for="adreça">Adreça</label>
                    <input type="text" class="form-control" name="adreça" id="adreça" placeholder="C/">
                  </div>
                  <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Amposta">
                  </div>
                  <div class="form-group">
                    <label for="cif">CIF</label>
                    <input type="text" class="form-control" name="cif" id="cif" placeholder="Amposta">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="info@gmail.com">
                  </div>

                  <!-- Estat Sempre actiu(perque crees l'user .-.) -->

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
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
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar institut</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p> Segur que vols eliminar aquest institut? </p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
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
                <h5 class="modal-title" id="staticBackdropLabel">Modificar institut</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form id="crud-modificar-institut" method="post">
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="IES Montsia">
                      </div>
                      <div class="form-group">
                        <label for="localitat">Localitat</label>
                        <input type="text" class="form-control" name="localitat" id="localitat" placeholder="Amposta">
                      </div>
                      <div class="form-group">
                        <label for="adreça">Adreça</label>
                        <input type="text" class="form-control" name="adreça" id="adreça" placeholder="C/">
                      </div>
                      <div class="form-group">
                        <label for="telefon">Telefon</label>
                        <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Amposta">
                      </div>
                      <div class="form-group">
                        <label for="cif">CIF</label>
                        <input type="text" class="form-control" name="cif" id="cif" placeholder="Amposta">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="info@gmail.com">
                      </div>
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



  </body>
</html>
