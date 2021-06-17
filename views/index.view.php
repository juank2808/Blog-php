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
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark navbar-expand-md">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo PATH_INDEX; ?>">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Index</a>
            </li>
            <li class="nav-item">
              <form class="d-flex" action="<?php echo P_PATH; ?>search.php" method="get" name="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
            <p class="card-text"><small class="text-muted"><?php echo date("F j, Y, g:i a");  ?></small></p>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark ">
      <div class="container">
        <div class="row">
          <span class="text-muted">My BLOG with PHP <a href="https://es.linkedin.com/in/juan-camilo-amaya-florez-b95084138"><i class="bi bi-linkedin"></i></></span>
        </div>
      </div>
    </footer>
  </body>
</html>
