<!doctype html>
<html lang="en" class="h-100">

  <?php
    // S'ha de afegir aquest require a qualsevol pagina que fagi us de les views
    require_once('./php/template.php');
    require_once(PHP_ROOT. 'database.php');

    $DB = new Database();
    if ($_SESSION['usuari_actual'] ?? false) {
        header('Location: ./gestor.php');
    }
  ?>

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php view('header'); ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php view('navbar', 0); ?>

	<!-- Banner | additionally you can specify the banner title and subtitle ( $title='string'; $subtitle='string'; ) before the requirement -->
	<?php view('banner', 'Ens presentem al mon exterior!', 'Benvingut a Uniproject'); ?>

    <!-- Begin page content -->
    <main class="flex-grow-1">
      <div class="container d-flex flex-column py-5 h-100">
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
        <div class="container-fluid">

        </div>
	  </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

  </body>
</html>
