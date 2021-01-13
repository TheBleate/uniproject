<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php  require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php $tab=2; $navbar=0; require_once('./template/navbar.php') ?>

	<!-- Banner | additionally you can specify the banner title and subtitle ( $title='string'; $subtitle='string'; ) before the requirement -->
	<?php $title='Ens presentem al mon exterior!'; $subtitle='Benvingut a Uniproject'; require_once('./template/banner.php') ?>

    <!-- Begin page content -->
	<main class="flex-shrink-0">
        <div class="container py-5">
        <!--Content here-->
            
        </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php require_once('./template/footer.php') ?>

    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
