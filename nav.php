<?php
function isActive($currently)
{
  $filename = basename($_SERVER['REQUEST_URI']);
  if ($filename == $currently) {
    return "active";
  }
  return;
}
?>

<div id="top_menu">
  <strong><a href="index.php" id="name">Ing. Vladimír Kryštof, znalec</a></strong>

  <nav>
    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

    <ul class="menu">
      <div class="close_menu"><i class="fa fa-times" aria-hidden="true"></i></div>
      <li><a href="index.php" class="<?= isActive("index.php") ?>">úvod</a></li>
      <span>/</span>
      <li><a href="posudky.php" class="<?= isActive("posudky.php") ?>">posudky</a></li>
      <span>/</span>
      <li><a href="kontakt.php" class="<?= isActive("kontakt.php") ?>">kontakt</a></li>

    </ul>
  </nav>
</div>