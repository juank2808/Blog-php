<?php

class Connection
{

  public function connect(){
    try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=blog-php','root','');

    } catch (PDOException $e) {
      echo "Error:". $e->getMessage();
      die();
    }
    return $conn;
  }
  public function try_connection(){
    $conn = new Connection();
    if (!$conn->connect()) {
      // header('Locale:error.php');
      return false;
    }else {
      return true;
    }
  }
}


?>
