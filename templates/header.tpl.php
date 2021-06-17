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
          <form class="d-flex" action="search.php" method="get" name="search">
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
