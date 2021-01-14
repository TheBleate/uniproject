<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php $tab=0; $navbar=0; require_once('./template/navbar.php') ?>

    <!-- Begin page content -->
    <main class="flex-grow-1">
      <div class="container d-flex py-5 h-100">
		<div class="login-form">
			<form action="/examples/actions/confirmation.php" method="post">
				<h2 class="text-center">Log in</h2>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" required="required">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Log in</button>
				</div>
				<div class="clearfix">
					<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
					<a href="#" class="float-right">Forgot Password?</a>
				</div>
			</form>
			<p class="text-center"><a href="#">Create an Account</a></p>
		</div>
	  </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php require_once('./template/footer.php') ?>

    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
