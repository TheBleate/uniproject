<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">
  <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/icons">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php $navbar=0; require_once('./template/navbar.php') ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5 text-center">Registre</h1>

        <!-- //compartiment a l'esquerra amb una taula amb atributs? -->

        <div class="row">
          <div class="col-3">

          </div>
          <div class="col-6">

        <!-- <div class="card bg-light"> -->
            <form>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
                  <input name="" class="form-control" placeholder="Full name" type="text">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
                  <input name="" class="form-control" placeholder="Email address" type="email">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
              </div>
              <select class="custom-select" style="max-width: 120px;">
                  <option selected="">+971</option>
                  <option value="1">+972</option>
                  <option value="2">+198</option>
                  <option value="3">+701</option>
              </select>
                <input name="" class="form-control" placeholder="Phone number" type="text">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-building"></i> </span>
              </div>
              <select class="form-control">
                <option selected=""> Select job type</option>
                <option>Designer</option>
                <option>Manager</option>
                <option>Accaunting</option>
              </select>
            </div> <!-- form-group end.// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input class="form-control" placeholder="Create password" type="password">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input class="form-control" placeholder="Repeat password" type="password">
              </div> <!-- form-group// -->
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
              </div> <!-- form-group// -->
              <p class="text-center">Have an account? <a href="./login.php">Log In</a> </p>
          </form>
        <!-- </div> -->
        <div class="col-3">

        </div>
        </div>


        </div>
        </main>

        <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
        <?php require_once('./template/footer.php') ?>

        <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
        </body>
        </html>
