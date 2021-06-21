<?php
require 'objs/article.php';
require 'admin/config.php';
require 'views/index.view.php';
//
// $conn = new Connection();
//
$article =new Article('HI','MYARTICLE','','MYARTICLE2','HELLO.png');
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
print_r($article->get_articles($page));

?>
