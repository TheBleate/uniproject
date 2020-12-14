<!doctype html>
<html lang="en" class="h-100">

  <!-- Header | additionally you can specify a custom css file by adding ( $style=file.css ) before the requirement -->
  <?php require_once('./template/header.php') ?>

  <body class="d-flex flex-column h-100">

    <!-- Navigation bar | additionally you can specify the type of the navigation bar adding ( $navbar=type ) before the requirement -->
    <?php $navbar=0; require_once('./template/navbar.php') ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5 text-center">Empleats</h1>
        <!-- //compartiment a l'esquerra amb una taula amb atributs? -->

        <div class="row">
          <div class="col-5">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Cognom</th>
                  <th scope="col">Administra</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Armenio</td>
                  <td>Rosalero</td>
                  <td><i class="fa fa-pencil" aria-hidden="true"></i> | <i class="fa fa-minus" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td><i class="fa fa-pencil" aria-hidden="true"></i> | <i class="fa fa-minus" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td><i class="fa fa-pencil" aria-hidden="true"></i> | <i class="fa fa-minus" aria-hidden="true"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-2">
          </div>
          <div class="col-5">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom empleat">
                <!-- <small id="emailHelp" class="form-text text-muted">Nom complet.</small> -->
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Cognom</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cogonom Empleat">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tipus d'Usuari</label>
                <select class="form-control">
                  <option>Usuari Estandard</option>
                  <option>Gerent</option>
                  <option>Administrador</option>

                </select>
              </div>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Cognom complet.</label>
              </div> -->
              <button type="submit" class="btn btn-primary">Crear Emplat</button>
            </form>
          </div>
        </div>


	  </div>
    </main>

    <!-- Footer | additionally you can specify the type of the navigation bar adding ( $footer=type ) before the requirement -->
    <?php require_once('./template/footer.php') ?>

    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
