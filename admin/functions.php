<?php
/*CLEAN DATA*/

function clean_data($d){
  $d = trim($d);
  $d = stripslashes($d);
  $d = htmlspecialchars($d);

  return $d;
}

 ?>
