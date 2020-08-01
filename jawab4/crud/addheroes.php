<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  

    //cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0) {
      echo "<script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
      </script>
      ";

    } else {
      echo "<script>
      alert('data gagal ditambahkan');
      document.location.href = 'index.php'.php';
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

    <title>Add Video</title>
  </head>
  <body>
    <div class="container justify-content-center my-5">
      <h1>Add Heroes</h1>
    </div>

    <section>
      <div class="container justify-content-center bg-secondary">
        <div class="row">
          <div class="col-md-8">
            <form action="" method="POST">
                <input type="hidden" name="id">
                <div class="form-group">
                <label for="name">name :</label>
                <input type="text" class="form-control" name="name" id="name" >
                 <label for="type_id">type_id :</label>
                <input type="text" class="form-control" name="type_id" id="type_id" >
                <label for="photo">photo :</label>
                <input type="text" class="form-control" name="photo" id="photo">
                <div class="container">
                <button class="btn btn-primary mt-3 mx-4" type="submit" name="submit">Tambah</button>
                <input class="btn btn-primary mt-3 mx-4" type="reset" value="Reset">
                <a class="btn btn-primary mt-3 mx-4" href="index.php" role="button">Back</a>
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