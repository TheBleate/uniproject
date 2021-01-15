<!-- Sidebar -->
<?php
$tab = $tab ?? null;
switch ($navbar ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">Usuaris</a>
<<<<<<< HEAD
      <a href="#" class="list-group-item list-group-item-action">Centre educatiu</a>
=======
      <a href="#" class="list-group-item list-group-item-action">Instituts</a>
      <a href="#" class="list-group-item list-group-item-action">Empreses</a>
>>>>>>> 5ba886304c6c28a67d2d00f473cf4ca744b6e1ab
      <a href="#" class="list-group-item list-group-item-action">Projectes</a>
      <a href="#" class="list-group-item list-group-item-action disabled">Incidencies</a>
    </div>
  </div>
<?php break;
  case 1: ?>
  <!-- Alternative sidebar here -->

<?php break;
  endswitch;
  unset($tab, $navbar); ?>
