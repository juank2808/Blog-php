<?php
require 'objs/article.php';
require 'admin/config.php';

//
// $conn = new Connection();
//
$n_Page='';
$articles = new Article('','','','','');
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;

$n_Page = $articles->get_pagination()+1;


$articles = $articles->get_articles($page);


require 'views/index.view.php';
/*if we assign variblaes to our views, those views have to be placed below our code*/

?>
