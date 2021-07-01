
    <?php require PATH_HEADER_TPL; ?>
    <div class="container">
      <div class="row">
        <h1 class="text-center">MY BLOG WITH PHP</h1>
      </div>
      <div class="row justify-content-md-center">
      <?php foreach ($articles as $article): ?>
          <div class="card col-5">
            <img src="<?php echo PATH_PICS.'prov-image.png'; ?>" class="card-img-top" alt="Prov image:">
            <div class="card-body">
              <a class="article-title" href="article.php?id=<?php echo $article['id']; ?>">
                <h5 class="card-title"> <?php  echo $article['a_title'];?></h5></a>
              <p class="card-text"><?php echo $article['a_desc']; ?></p>
              <a href="article.php?id=<?php echo $article['id'] ?>"class="read-more">Read more</a>
              <p class="card-text"><small class="text-muted"><?php echo $article['a_date'];  ?></small><!--read more---></p>
            </div>
          </div>
      <?php endforeach; ?>
      </div>
    </div>
    <?php require PATH_PAGINATION_TPL; ?>
    <?php require PATH_FOOTER_TPL; ?>
