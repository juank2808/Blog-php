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
      <a class="navbar-brand" href="<?php echo PATH_INDEX; ?>"><i class="bi bi-bootstrap"></i>log</a>
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
            <form class="d-flex" action="search.php" method="post" name="search">
              <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
