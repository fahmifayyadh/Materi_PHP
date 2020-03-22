<?php

define('phi', 3.14);

function luasLingkaran() {
  $jarijari = array(1, 2,3);
  foreach ($jarijari as $r) {
    $luas = phi * $r * $r;
      echo "$luas <br>";
  }
}

luasLingkaran();


 ?>
