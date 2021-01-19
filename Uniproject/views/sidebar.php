<!-- Sidebar -->
<?php
switch ($args[0] ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo(CURRENT_FILENAME === 'gestor' ? 'active' : ''); ?>">
            <a class="nav-link" href="../gestor.php">Usuaris</a>
          </li>
          <li class="nav-item <?php echo(CURRENT_FILENAME === 'institut'  ? 'active' : ''); ?>">
            <a class="nav-link" href="../institut.php">Instituts</a>
          </li>
          <li class="nav-item <?php echo(CURRENT_FILENAME === 'categoria'  ? 'active' : ''); ?>">
            <a class="nav-link" href="./categoria.php"> Categoria</a>
          </li>
          <li class="nav-item <?php echo(CURRENT_FILENAME === 'Incidencia'  ? 'active' : ''); ?>">
            <a class="nav-link" href="../incidencia.php"> Incidencies</a>
          </li>
        </ul>
    </div>
  </div>
<?php break;
  case 1: ?>
  <!-- Alternative sidebar here -->

<?php break;
  endswitch; ?>
