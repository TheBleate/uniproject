<footer class="page-footer mt-auto py-3 bg-dark">

<?php switch ($args[0] ?? 0):
  case 0:?>
  <!-- Footer -->
    <!-- Footer Links -->
    <div class="container text-white text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase  font-weight-bold">Products</h6>
          <hr class="bg-light accent-2  mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a class="text-white" href="#!">MDBootstrap</a></p>
          <p><a class="text-white" href="#!">MDWordPress</a></p>
          <p><a class="text-white" href="#!">BrandFlow</a></p>
          <p><a class="text-white" href="#!">Bootstrap Angular</a></p>

        </div>
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a class="text-white" href="#!">Your Account</a></p>
          <p><a class="text-white" href="#!">Become an Affiliate</a></p>
          <p><a class="text-white" href="#!">Shipping Rates</a></p>
          <p><a class="text-white" href="#!">Help</a></p>

        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="bg-light accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fa fa-phone mr-3"></i> + 34 000 000 000</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="text-white footer-copyright text-center py-3">© 2020 Copyright:
      <a class="text-light" href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

<?php break;
  case 1: ?>
  <!-- Alternative footer here -->

<?php break;
  endswitch; ?>

</footer>
<script src="./js/jquery/jquery-3.5.1.min.js"></script>
<script src="./js/bootstrap/bootstrap.min.js"></script>
<script src="./js/custom.js"></script>

<?php for($i=1;$i<count($args);$i++): ?>
    <!-- Custom per page styles -->
    <script src="<?php echo SCRIPTS_PATH. $args[$i]; ?>.js"></script>
<?php endfor; ?>
