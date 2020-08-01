<?php 
require 'functions.php';
$heroes = query("SELECT * FROM heroes ");

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    h6 {
      color: red;
      font-size: 15px;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DW - Wahyu Prasetyo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mx-4">
      <a class="btn btn-danger mx-4" href="addheroes.php" role="button">Add Heroes</a>
      <a class="btn btn-danger" href="addtype.php" role="button">Add Type</a>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="dropdown mt-4">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Heroes
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="tabeltype.php">Type</a>
  </div>
</div>

<div class="container mt-5">
  <?php foreach ($heroes as $hero) : ?>

  <div class="row ">

    <div class="col-md-4">  
      
  <div class="card bg-secondary img-thumbnail my-2 " style="width: 14rem;">
  <img src="img/<?= $hero["photo"]; ?>" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title"><?= $hero["name"]; ?></h5>
    <h6 class="text-left"><?= $hero["id"]; ?></h6>
    <a href="detail.php?id=<?=  $hero["id"]; ?>" class="btn btn-danger btn-sm">Detail</a>
  </div>
</div>
</div>
</div>

<?php endforeach; ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>