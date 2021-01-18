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
            <h2 class="pb-5">Llistat de Categories</h2>
            <?php

            require_once('./Categoria/Conexio.php');
            require_once('./php/categoria.php');
            $DB = new Conexio();
            $database = new Conexio($DB->getDB());
            //intento de if :()
            //if($idrol === "alumne"){}
            $CATEGORIA =new Categoria();
            $CATEGORIA->llistar();


            $idCategoria = (isset($_POST['idCategoria']) ? $_POST['idCategoria'] : null);
            $nom = (isset($_POST['Nom']) ? $_POST['Nom'] : null);
            $Descripcio = (isset($_POST['Descripcio']) ? $_POST['Descripcio'] : null);


            ?>
        		<?php
        			//incluimos el fichero de conexion
        			include_once('Categoria/Conexio.php');

        			$database = new Conexio();
        			$db = $database->open();
        			try{
        				$sql = 'SELECT * FROM Categoria';
        				foreach ($db->query($sql) as $row) {
        					?>
        					<tr>
        						<td><?php echo $row['idCategoria']; ?></td>
        						<td><?php echo $row['Nom']; ?></td>
        						<td><?php echo $row['Descripcio']; ?></td>
        						<td>
        							<a href="#edit_<?php echo $row['idCategoria']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
        							<a href="#delete_<?php echo $row['idCategoria']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
        						</td>
        						<?php include('Categoria/borrarEditarCategoria.php'); ?>
        					</tr>
        					<?php
        				}
        			}
        			catch(PDOException $e){
        				echo "Hubo un problema en la conexión: " . $e->getMessage();
        			}
        		?>
        		</div>
        	</div>
        </div>
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
  <?php require_once('./template/footer.php') ?>

    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
