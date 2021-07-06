<?php
require 'objs/article.php';
require 'admin/config.php';

//
// $conn = new Connection();
//
$n_Page='';
$articles = new Article('','','','','');
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
var_dump($articles->get_pagination());
if ($articles->get_pagination() == 0) {
  $n_Page = 1+1;
}else {
  $n_Page = $articles->get_pagination();
}

$articles = $articles->get_articles($page);


// require 'views/index.view.php';
/*if we assign variblaes to our views, those views have to be placed below our code*/

?>
