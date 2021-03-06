<?php
/**
 *
 */
require 'db.php';
require './admin/functions.php';

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
  public function getId($id){
    return $this->$id;
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
  public function get_pagination(){
    $PPP = 5;
    $n_Page = '';
    $conn = new Connection ();
    if($conn->try_connection()==true){
      $conn = $conn->connect();

      $totalArticles = $conn->prepare("SELECT FOUND_ROWS() as total");
      $totalArticles->execute();
      $totalArticles =  $totalArticles->fetch()['total'];
      if ($totalArticles == 0) {
        $totalArticles = 1;
        $n_Page = ceil($totalArticles / $PPP);
      }
    }

    return $n_Page;
  }
  public function get_articles($page){
    $sttm = '';
    $PPP = 5;
    $init = ($page > 1) ? ($page * $PPP - $PPP) : 0 ;
    $conn = new Connection ();
    if($conn->try_connection()==true){
      $conn = $conn->connect();
      $sttm = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $init, $PPP" );
      $sttm->execute();
      $sttm = $sttm->fetchAll();
      return $sttm;
    }else {
      return "<h1>Articles not foud</h1>";
    }
    return $sttm;
  }
  public function get_article($id){

    $conn = new Connection ();
    $conn = $conn->connect();

    $sttm = $conn->query("SELECT * FROM articles WHERE id = $id LIMIT 1");
    $sttm = $sttm->fetch();

    return ($sttm) ? $sttm : false;
  }
  public function search_article($article){
    $conn = new Connection ();
    $conn = $conn->connect();
    $sttm = $conn->prepare(
      'SELECT * FROM articles WHERE a_title LIKE :search OR a_text LIKE :search');
      $sttm->execute(array(':search'=>"%$article%"));
    $sttm = $sttm->fetchAll();
    if (empty($sttm)) {
      $sttm = 'Data not Found';
    }
    return $sttm;
  }

}


 ?>
