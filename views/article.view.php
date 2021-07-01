  <?php require PATH_HEADER_TPL; ?>
  <div class="paper-effe container">
    <div class="row justify-content-md-center">
      <h1 class=""><?php echo $article['a_title']; ?></h1>
      <h6 class="gray"><?php echo $article['a_date']; ?></h6>

      <div class="col-12">
          <div class="other-effe">
            <img src="<?php echo PATH_PICS.'prov-image.png'; ?>" class="img-fluid" alt="">
          </div>
          <?php  echo $article['a_text'];?>
          <br/>
      </div>
    </div>
  </div>
  <?php require PATH_FOOTER_TPL; ?>
