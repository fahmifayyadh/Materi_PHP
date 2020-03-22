<?php
define('phi', 3.14);

function luasLingkaran()
{
  $r = array(1,2,3,4,5);
  foreach ($r as $jarijari) {
    $luas = phi * $jarijari * $jarijari;
    echo "$luas<br>";
  }

}

luasLingkaran();
 ?>
