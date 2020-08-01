<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  

    //cek apakah data berhasil ditambahkan atau tidak
    if(tambah2($_POST) > 0) {
      echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'tabeltype.php';
      </script>
      ";

    } else {
      echo "<script>
      alert('data gagal ditambahkan');
      document.location.href = 'tabeltype.php';
      </script>
      ";
    }
}
  

 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add Type</title>
  </head>
  <body>
    <div class="container justify-content-center my-4">
      <h1>Add Type</h1>
    </div>

<section>
      <div class="container justify-content-center bg-secondary">
        <div class="row">
          <div class="col-md-8">
            <form action="" method="POST">
                <input type="hidden" name="id">
                <div class="form-group">
                <label for="name">NAME :</label>
                <input type="text" class="form-control" name="name" id="name" >
                <div class="container">
                <button class="btn btn-primary mt-3 mx-4" type="submit" name="submit">Tambah</button>
                <input class="btn btn-primary mt-3 mx-4" type="reset" value="Reset">
                <a class="btn btn-primary mt-3 mx-4" href="tabeltype.php" role="button">Back</a>
                </div>
              </div>
           </form> 
         </div>
        </div>
      </div>
</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>