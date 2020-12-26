<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['dusername']) && !empty($_SESSION['dpassword']))
{
  $did=$_SESSION['dusername'];
  $qry="select * from tdealer where dealerid='$did'";
  $ru=mysqli_query($conn,$qry);
  $nu=mysqli_num_rows($ru); 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>transaction/statement</title>
  </head>
  <body>
    
    <ul class="nav justify-content-center bg-info">
      <ul class="nav justify-content-center">
        <li class="nav-item text-light" style="font-size: 25px;"><img src="../images/flogo.png" height="64" width="64" alt="FENOBET">FENOBET</li>
      </ul>
      <li class="nav-item mr-auto">
        <a class="nav-link active text-light" hidden href="#">Active</a>
      </li>
      
      <li class="nav-item dropdown mr-5 mt-3">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Option
        </a>
        <div class="dropdown-menu bg-info mr-2" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dealer.php">dashboard</a>
        </div>
      </li>
    </ul>

    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">send to</th>
                <th scope="col">point</th>
                <th scope="col">date</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $n=1;
              while($fetch=mysqli_fetch_assoc($ru))
              {
              ?>
              <tr>
                <th scope="row"><?=$n?></th>
                <td><?=$fetch['dealerid']?></td>
                <td><?=$fetch['tpoint']?></td>
                <td><?=$fetch['tdate']?></td>
              </tr>
              <?php
              $n++;
               }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>
<?php
}
else
{
  header('location:../index.php');
}
?>