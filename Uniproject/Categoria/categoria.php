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
          <div class="container-fluid py-5">
            <h1 class="mt-5">Sticky footer with fixed navbar</h1>
              <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
              <p>Back to <a href="#">the default sticky footer</a> minus the navbar.</p>
          		<div class="container-fluid">
          			<h4 class="display-4">bg-*</h4>
          			<p class="bg-muted">Muted.</p>
          			<p class="bg-primary">Primary.</p>
          			<p class="bg-success">Success.</p>
          			<p class="bg-info">Info.</p>
          			<p class="bg-warning">Warning.</p>
          			<p class="bg-danger">Danger.</p>
          			<p class="bg-secondary">Secondary.</p>
          			<p class="bg-dark">Dark.</p>
          			<p class="bg-body">Default.</p>
          			<p class="bg-light">Light.</p>
          			<p class="bg-white">White</p>
          		</div>
      	   </div>
           <?php require_once('./template/footer.php') ?>

        <!-- /#page-content-wrapper -->
        	<div class="row">
        		<div class="col-sm-8 col-sm-offset-2">
        			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a>
        <?php
        	session_start();
        	if(isset($_SESSION['message'])){
        		?>
        		<div class="alert alert-info text-center" style="margin-top:20px;">
        			<?php echo $_SESSION['message']; ?>
        		</div>
        		<?php

        		unset($_SESSION['message']);
        	}
        ?>
        <table class="table table-bordered table-striped" style="margin-top:20px;">
        	<thead>
        		<th>ID</th>
        		<th>Nom</th>
        		<th>Tipus</th>
        	</thead>
        	<tbody>
        		<?php
        			//incluimos el fichero de conexion
        			include_once('dbconect.php');

        			$database = new Connection();
        			$db = $database->open();
        			try{
        				$sql = 'SELECT * FROM empleados';
        				foreach ($db->query($sql) as $row) {
        					?>
        					<tr>
        						<td><?php echo $row['idEmp']; ?></td>
        						<td><?php echo $row['Nombres']; ?></td>
        						<td><?php echo $row['Apellidos']; ?></td>
        						<td><?php echo $row['Telefono']; ?></td>
        						<td><?php echo $row['Carrera']; ?></td>
        						<td><?php echo $row['Pais']; ?></td>
        						<td>
        							<a href="#edit_<?php echo $row['idEmp']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
        							<a href="#delete_<?php echo $row['idEmp']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
        						</td>
        						<?php include('BorrarEditarModal.php'); ?>
        					</tr>
        					<?php
        				}
        			}
        			catch(PDOException $e){
        				echo "Hubo un problema en la conexión: " . $e->getMessage();
        			}

        			//Cerrar la Conexion
        			$database->close();

        		?>
        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->


    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
