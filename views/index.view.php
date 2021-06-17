
    <?php require PATH_HEADER_TPL; ?>
    <div class="container">
      <div class="row">
        <h1 class="text-center">MY BLOG WITH PHP</h1>
      </div>
      <div class="row justify-content-md-center">
        <div class="card col-10">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Article 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"><?php echo date("F j, Y, g:i a");  ?></small></p>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="card col-10">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Article 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted"><?php echo date("F j, Y, g:i a");  ?></small><!--read more---></p>
          </div>
        </div>
      </div>
    </div>
    <?php require PATH_FOOTER_TPL; ?>
