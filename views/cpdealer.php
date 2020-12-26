<?php
include '../db/dbcon.php';
session_start();
if(!empty($_SESSION['dusername']) && !empty($_SESSION['dpassword']))
{
  if(isset($_REQUEST['submit']))
  {
    if($_REQUEST['pswd']==$_REQUEST['cpswd'])
    {
      $pswd=md5($_REQUEST['cpswd']);
      $usr=$_SESSION['dusername'];
      $qry="update dealer set password='$pswd' where username='$usr'";
      $run=mysqli_query($conn,$qry);
      if($run)
      {
        $_SESSION['dpassword']=$pswd;
        $error="password succesfully changed!";
      }
      else
      {
        $error="password not changed!";
      }
    }
    else
    {
      $error="password not matched!";
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

    <title>change password</title>
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
          <form action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="text" class="form-control" id="Password" name="pswd" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="cpassword"  name="cpswd" placeholder="Confirm Password">
            </div>
            <?php
            if(!empty($error))
            {
            ?>
            <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismiss1" role="alert">
               <p id="alert1"><?=$error?></p>
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
          </form>
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