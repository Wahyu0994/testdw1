<?php 
require 'functions.php';
//ambil data di url
$id = $_GET["id"];

//query data heroes berdasarkan id nya
$heroes = query("SELECT * FROM heroes WHERE id = $id")[0];


 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Detail</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>Detail</h1>
    </div>

  <div class="container">
    <div class="card mt-5 bg-secondary text-center" style="width: 18rem;">
      <div class="card-header">
        <h5><?= $heroes["name"]; ?></h5>
      </div>
      <ul class="list-group list-group-flush ">
       <li class="list-group-item"><img src="img/<?=  $heroes["photo"]; ?>" alt="" width=150></li>
        <li class="list-group-item">TYPE : <?= $heroes["type_id"]; ?></li>
      </ul>
    </div>
    </div>
    <div class="container mt-3"> 
       <a class="btn btn-danger btn-sm mx-3" href="updatehero.php?id=<?=$heroes["id"]; ?>" role="button">Update</a>
       <a class="btn btn-danger btn-sm" href="deletehero.php?id=<?=$heroes["id"]; ?>" role="button">Delete</a>
      <a class="btn btn-primary mx-4 btn-sm" href="index.php" role="button">Back</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>