<?php
include 'db/dbcon.php';
session_start();
if(isset($_REQUEST['submit']))
{
  if($_REQUEST['option']=='admin')
  {
    $usr=$_REQUEST['username'];
    $pswd=md5($_REQUEST['password']);
    if(!empty($usr) && !empty($pswd))
    {
      $qry="select * from admin where username='$usr' and password='$pswd'";
      $run=mysqli_query($conn,$qry);
      $num=mysqli_num_rows($run);
      $fetch=mysqli_fetch_array($run);
      if($num>0)
      {
        $_SESSION['adusername']=$fetch['username'];
        $_SESSION['adpassword']=$fetch['password'];
        header("location:views/admin.php");
      }
      else
      {
        $error="username and password incorrect!";
      }
    }
    else
    {
      $error="username and password can't be empty!";
    }
    
  }


  if($_REQUEST['option']=='dealer')
  {
    $usr=$_REQUEST['username'];
    $pswd=md5($_REQUEST['password']);
    if(!empty($usr) && !empty($pswd))
    {
      $qry="select * from dealer where username='$usr' and password='$pswd'";
      $run=mysqli_query($conn,$qry);
      $num=mysqli_num_rows($run);
      $fetch=mysqli_fetch_array($run);
      if($fetch>0)
      {
        $_SESSION['dusername']=$fetch['username'];
        $_SESSION['dpassword']=$fetch['password'];
        header('location:views/dealer.php');
      }
      else
      {
        $error="username and password incorrect!";
      }
    }
    else
    {
      $error="username and password can't be empty!";
    }
  }

  if($_REQUEST['option']=='client')
  {
    $usr=$_REQUEST['username'];
    $pswd=md5($_REQUEST['password']);
    if(!empty($usr) && !empty($pswd))
    {
      $qry="select * from client where username='$usr' and password='$pswd'";
      $run=mysqli_query($conn,$qry);
      $num=mysqli_num_rows($run);
      $fetch=mysqli_fetch_array($run);
      if($fetch>0)
      {
        $_SESSION['cusername']=$fetch['username'];
        $_SESSION['cpassword']=$fetch['password'];

        header('location:views/client.php');
      }
      else
      {
        $error="username and password incorrect!";
      }
    }
    else
    {
      $error="username and password can't be empty!";
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Login</title>

  </head>
  <body style="background-image: url(images/bg.jpg);background-size:cover;background-repeat:no-repeat;height: 100%;">
    <div class="container pt-5">
      <div class="card mt-5 ">
        <div class="card-body shadow-lg">
          <ul class="nav justify-content-center bg-info text-light mt-1">
            <li class="nav-item" style="font-size: 25px;"><img src="images/flogo.png" height="64" width="64" alt="FENOBET">FENOBET</li>
          </ul>

          <form class="mt-5" method="post">
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label" style="font-size: 15px;font-weight: bolder;">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label" style="font-size: 15px;font-weight: bolder;">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0" style="font-size: 15px;font-weight: bolder;">Select</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input option" type="radio" name="option" id="admin"  value="admin" checked>
                    <label class="form-check-label" for="admin">
                     Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input option" type="radio" name="option" id="dealer"   value="dealer">
                    <label class="form-check-label" for="dealer">
                    Dealer
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input option" type="radio" name="option" id="client"  value="client">
                    <label class="form-check-label" for="client">
                     Client
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <?php if(!empty($error)){ ?>
            <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismiss" role="alert">
               <p id="alert"><?=$error?></p>
            </div>
           <?php } ?>
            <div class="nav justify-content-center">
               <button type="submit" value="submit" id="submit" name="submit" class="btn btn-primary w-25 shadow">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
