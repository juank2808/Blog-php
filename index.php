<?php
require 'db/db.php';
require 'admin/config.php';
require 'views/index.view.php';

$conn = new Connection();

if (!$conn->connect()) {
  header('Locale:error.php');
}else {
  echo "SUCCESS";
}

?>
