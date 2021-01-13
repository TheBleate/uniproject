<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column">

    <?php $tab=2; $navbar=1; require_once('./template/navbar.php') ?>

    <main class="d-flex flex-row">

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

                    $USUARI->llistarUsuaris();

                ?>

            </div>
            <?php $script = './js/modals.js'; require_once('./template/footer.php'); ?>

            <!-- /#page-content-wrapper -->

        <!-- Modal button (se cambiara) -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-creacio">
          Crear (icona)
        </button>
        <!-- Modal de Creacio -->
        <div class="modal fade" id="modal-creacio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Creacio d'usuaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <p> muchotexto </p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Crear</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal de Eliminacio -->
        <!-- Modal de Modificacio -->
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->


    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/modals.js"></script>
  </body>
</html>
