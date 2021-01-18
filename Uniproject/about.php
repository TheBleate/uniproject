<!doctype html>
<html lang="en" class="h-100">

  <?php
    // S'ha de afegir aquest require a qualsevol pagina que fagi us de les views
    require_once('./php/template.php');
  ?>

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php view('header'); ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php view('navbar', 0); ?>

	<!-- Banner | additionally you can specify the banner title and subtitle ( $title='string'; $subtitle='string'; ) before the requirement -->
	<?php view('banner', 'Ens presentem al mon exterior!', 'Benvingut a Uniproject'); ?>

	<!-- Begin page content -->
	<main class="flex-shrink-0">
      <div class="container py-5">
        <!--Content here-->
	   </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php view('footer', 0, 'bootstrap/bootstrap.bundle.min'); ?>

  </body>
</html>
