<?php
require 'objs/article.php';
require 'admin/config.php';
// require 'admin/functions.php';

var_dump($_GET);
//i will try with JS to show data :)
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {
  $srch_a = clean_data($_GET['search']);
  $article  = new Article('','','','','');
  var_dump($srch_a);
  $article = $article->search_article($srch_a);
  var_dump($article);
}else {
  // header('Location:'.PATH_INDEX);
}


require 'views/search.view.php';
