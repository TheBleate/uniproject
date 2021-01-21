<!-- Sidebar -->
<?php
switch ($args[0] ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
    <div class="list-group">
        <a href="<?php echo ROOT_REL_PATH; ?>gestor.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'gestor' ? 'active' : ''); ?>">Usuaris</a>
        <a href="<?php echo ROOT_REL_PATH; ?>institut.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'institut'  ? 'active' : ''); ?>">Instituts</a>
        <a href="<?php echo ROOT_REL_PATH; ?>empresa.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'empresa'  ? 'active' : ''); ?>">Empresa</a>
        <a href="<?php echo ROOT_REL_PATH; ?>categoria.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'categoria'  ? 'active' : ''); ?>">Categoria</a>
        <a href="<?php echo ROOT_REL_PATH; ?>incidencia.php" class="list-group-item list-group-item-action <?php echo(CURRENT_FILENAME === 'incidencia'  ? 'active' : ''); ?>">Incidencia</a>
    </div>
  </div>
<?php break;
  case 1: ?>
  <!-- Alternative sidebar here -->

<?php break;
  endswitch; ?>
