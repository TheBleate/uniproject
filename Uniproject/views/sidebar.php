<!-- Sidebar -->
<?php
switch ($args[0] ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
    <div class="list-group">
      <a href="./gestor.php" class="list-group-item list-group-item-action active">Usuaris</a>
      <a href="institut.php" class="list-group-item list-group-item-action">Instituts</a>
      <a href="" class="list-group-item list-group-item-action">Categoria</a>
      <a href="./incidencia.php" class="list-group-item list-group-item-action disabled">Incidencies</a>
    </div>
  </div>
<?php break;
  case 1: ?>
  <!-- Alternative sidebar here -->

<?php break;
  endswitch; ?>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item <?php echo(CURRENT_FILENAME === 'gestor' ? 'active' : ''); ?>">
      <a class="nav-link" href="./gestor.php">Usuaris</a>
    </li>

    <li class="nav-item <?php echo(CURRENT_FILENAME === 'institut'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./institut.php">Instituts</a>
    </li>
    <li class="nav-item <?php echo(CURRENT_FILENAME === 'categoria'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./categoria.php"> Categoria</a>
    </li>
    <li class="nav-item <?php echo(CURRENT_FILENAME === 'Incidencia'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./incidencia.php"> Incidencies</a>
    </li>
  </ul>
