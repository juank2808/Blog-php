<?php
/**
 *
 */
require 'db.php';

class Article extends Connection
{
  protected $id;
  protected $a_title;
  protected $a_desc;
  protected $a_date;
  protected $a_text;
  protected $a_image;

  function __construct($a_title,$a_desc,$a_date,$a_text,$a_image)
  {
    $this->a_title = $a_title;
    $this->a_desc = $a_desc;
    $this->a_date = $a_date;
    $this->a_text = $a_text;
    $this->a_image = $a_image;
  }
  /*only get method to our id*/
  public function getId(){
    return $this->id;
  }
  /***/
  public function getA_title(){
    return $this->a_title;
  }
  public function setA_title($a_title){
    $this->a_title = $a_title;
  }
  public function getA_desc(){
    return $this->a_desc;
  }
  public function setA_desc($a_desc){
    $this->a_desc = $a_desc;
  }
  public function getA_date(){
    return $this->a_date;
  }
  /*Set date dont exist cause is auto*/
  public function getA_text(){
    return $this->a_text;
  }
  public function setA_text($a_text){
    $this->a_text = $a_text;
  }
  public function getA_image(){
    return $this->a_image;
  }
  public function setA_image($a_image){
    $this->a_image = $a_image;
  }
  /*METHODS TO GET ARTICLES CALLING TO DB*/
  public function create_article(){
    $conn = new Connection();
    if (!$conn->connect()) {
      // header('Locale:error.php');
      echo "ERROR";
    }else {
      echo "SUCCESS";
    }
    
  }
}


 ?>
