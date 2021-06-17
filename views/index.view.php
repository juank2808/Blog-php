<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Blog</title>
  </head>
  <body>
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
  </body>
</html>
