<?php
require 'objs/article.php';
require 'admin/config.php';

//
// $conn = new Connection();
//
$articles = new Article('','','','','');
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;

$articles = $articles->get_articles($page);
/*ERROR in a function-*---*/
$n_Page = $articles->get_pagination();

require 'views/index.view.php';
/*if we assign variblaes to our views, those views have to be placed below our code*/

?>
