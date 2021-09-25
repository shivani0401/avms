<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>HOME</title>
</head>
<body>

<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <h3 class="navbar-brand">A V M S</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active navbar-right">
        <a class="nav-link" href="login.php">ADMIN LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active navbar-right">
        <a class="nav-link" href="watchmenLogin.php">WATCHMEN LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active navbar-right">
        <a class="nav-link" href="aboutus.php">ABOUT US <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h2> APARTMENT VISITORS MANAGEMENT SYSTEM</h2>
        <h4 class="text-dark">We are happy to help you.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>APARTMENT VISITORS MANAGEMENT SYSTEM</h2>
        <h4 class="text-dark">We are happy to help you.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>APARTMENT VISITORS MANAGEMENT SYSTEM</h2>
        <h4 class="text-dark">We are happy to help you.</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php
     include 'footer.php';
    ?>
</body>
</html>