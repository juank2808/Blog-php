<?php
require 'db/db.php';
require 'admin/config.php';
require 'views/index.view.php';

$conn = new Connection();

if (!$conn->connect()) {
  echo "CONNECTION not FOUND";
}else {
  echo "SUCCESS";
}

?>
