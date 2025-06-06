<?php
echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">FOUM</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Catagory
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="contact.php">Contact</a>
      </li>
    </ul>

    <form class="d-flex" role="search">
      <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
      <button class="btn rounded-pill bg-info" type="submit">Search</button>
    </form>
    <div class="mx-2">
        <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    </div>
  </div>
</div>
</nav>';

include 'partials\_loginModal.php';
include 'partials\signupModal.php';
?>