<?php
require 'objs/article.php';
require 'admin/config.php';


$article = new Article('','','','','');

$article_id = settype($_GET['id'],"integer");

if (empty($_GET['id'])) {
  header('Location: index.php');
}
$article = $article->get_article($article_id);


require 'views/article.view.php';
