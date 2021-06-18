<?php
require 'objs/article.php';
require 'admin/config.php';
require 'views/index.view.php';
//
// $conn = new Connection();
//
$article =new Article('HI','MYARTICLE','','MYARTICLE2','HELLO.png');

print_r($article->create_article());

?>
