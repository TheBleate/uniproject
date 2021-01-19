<header>
  <!-- Fixed navbar -->

<?php
switch ($args[0] ?? 0):
  case 0:?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Projectus </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo(CURRENT_FILENAME === 'index' ? 'active' : ''); ?>">
          <a class="nav-link" href="./index.php"><i class="fa fa-home" aria-hidden="true"></i> Inici</a>
        </li>

        <li class="nav-item <?php echo(CURRENT_FILENAME === 'about'  ? 'active' : ''); ?>">
          <a class="nav-link" href="./about.php"><i class="fa fa-info" aria-hidden="true"></i> About</a>
        </li>
        <li class="nav-item <?php echo(CURRENT_FILENAME === 'contact'  ? 'active' : ''); ?>">
          <a class="nav-link" href="./contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contacte</a>
        </li>
        <li class="nav-item">
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Log In</a>
            <a class="dropdown-item" href="#">Contacte</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Que fem? Qui som?</a>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      <!--
      <form class="form-inline my-2 my-lg-0" action="./login.php">
        <input class="form-control mr-sm-2" type="search" placeholder="email@projectus.com" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Log In</button>
      </form>
  -->
        <a class="navbar-brand" href="./login.php">Login</a>
    </div>
  </nav>
<?php break;
  case 1: ?>

    <?php // NOTE: Andrei, canviar la navbar del gestio, es aquesta.?>
    <!-- Sidebar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand " href="#">Projectus </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
            <a class="navbar-brand" href="./login.php">Login</a>
      </div>
    </nav>
<?php break;
    case 2: ?>
	<!-- Alternative navbar here -->

<?php break;
  endswitch; ?>

</header>
