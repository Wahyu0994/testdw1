<?php 
require "functions.php";
$type = query("SELECT * FROM type");
 
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

    <style>
      h5 {
        color: white;
        font-size: 15px;
        text-align: left;

      }
      h6 {
        color: white;
        font-size: 12px;
        text-align: right;
        color: red;
      }
      h6 .importir {
         color: white;
        font-size: 12px;
        color: red;
      }
      a {
        color: white;
      }

    </style>
    
  </head>
  <body>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">DW - Wahyu Prasetyo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
           
      <a class="btn btn-primary bg-danger mx-3" href="addheroes.php" role="button">Add Heroes</a>
      <a class="btn btn-primary bg-danger" href="addtype.php" role="button">Add Type</a>
            
          </div>
        </div>
      </nav>

      <section class="menu" id="menu">
        <div class="container">
          <div class="row">
            <div class="col-md">
             <div class="dropdown mt-5">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Type
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="index.php">Heroes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <table class="table table-dark mt-5 justify-content-center">
            <tr>
        <th>No.</th>
        <th>Opsi</th>
        <th>Name</th>
      </tr>

            <?php $i = 1; ?>
      <?php foreach ($type as $row) : ?>
   

      <tr>
        <td><?php echo $i; ?></td>
        <td>
          <a href="updatetype.php?id=<?php echo $row["id"]; ?>" class=" bg-danger">Update</a> |
          <a href="deletetype.php?id=<?php echo $row["id"]; ?>" class=" bg-danger" onclick="
          return confirm('yakin ?);">Delete</a>
        </td>
        <td><?php echo $row["name"]; ?></td>
      </tr>
<?php $i++; ?>
<?php endforeach; ?>


          </table>
        </div>
      </section>
      <div class="container">
      <a class="btn btn-primary" href="index.php" role="button">beranda</a>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>