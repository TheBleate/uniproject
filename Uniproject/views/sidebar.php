<!-- Sidebar -->
<?php
switch ($args[0] ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
    <div class="list-group">

      <a href="./gestor.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'gestor' ? 'active' : ''); ?>">Usuaris</a>
      <a href="institut.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'institut'  ? 'active' : ''); ?>">Instituts</a>
      <a href="./empresa.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'empresa'  ? 'active' : ''); ?>">Empresa</a>
      <a href="./categoria.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'categoria'  ? 'active' : ''); ?>">Categoria</a>
      <a href="./incidencia.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'incidencia'  ? 'active' : ''); ?>">Incidencia</a>

    </div>
  </div>
<?php break;
  case 1: ?>
  <!-- Alternative sidebar here -->

<?php break;
  endswitch; ?>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="./index.php">Usuaris</a>
    </li>

    <li class="nav-item <?php echo(CURRENT_FILENAME === 'institut'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./about.php">Instituts</a>
    </li>
    <li class="nav-item <?php echo(CURRENT_FILENAME === 'categoria'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./contact.php"> Categoria</a>
    </li>
    <li class="nav-item <?php echo(CURRENT_FILENAME === 'Incidencia'  ? 'active' : ''); ?>">
      <a class="nav-link" href="./contact.php"> Incidencies</a>
    </li>
  </ul>
