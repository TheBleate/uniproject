<!doctype html>
<html lang="en" class="h-100">
<?php
  // S'ha de afegir aquest require a qualsevol pagina que fagi us de les views
  require_once('./php/template.php'); ?>
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
            <h2 class="pb-5">Llistat de categories</h2>
            <?php
            require_once('./php/database.php');
            require_once('./php/categoria.php');
            $DB = new Database();
            $CATEGORIA = new Categoria($DB->getDB());
            //intento de if :()
            //if($idrol === "alumne"){}
            $CATEGORIA->llistar();
            ?>  </div>
        		<?php
                //D'on agafes id categoria
                //$idCategoria = (isset($_POST['idCategoria']) ? $_POST['idCategoria'] : null);
                $nom = (isset($_POST['nom']) ? $_POST['nom'] : null);
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
                    <form action=" " id="crud-alta" method="post" data-crud="categoria">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Creacio de Categories</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--Formulari de creacio-->
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="descripcio">Descripcio</label>
                                    <input type="text" class="form-control" name="descripcio" id="descripcio" placeholder="Название">
                                </div>
                                <!-- Estat Sempre actiu(perque crees l'user .-.) -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" id="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
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
                        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="crud-eliminar-categoria" method="post">
                            <p> Segur que vols eliminar aquesta categoria? </p>
                        </form>
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
                        <h5 class="modal-title" id="staticBackdropLabel">Modificar categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="crud-modificar-categoria" method="post">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <label for="categoria">Descripcio</label>
                                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Descripcio">
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
   <!-- <iframe width="420" height="315"
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
    </iframe>
    -->
</main>

<!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
<?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

</body>
</html>
