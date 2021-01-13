<!-- Sidebar -->
<?php
$tab = $tab ?? null;
switch ($navbar ?? 0):
  case 0:?>
  <!-- Sidebar -->
  <div class="bg-dark">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">Empresa</a>
      <a href="#" class="list-group-item list-group-item-action">Centre educatiu</a>
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
