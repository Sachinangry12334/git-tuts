<?php
include '../db/dbcon.php';
session_start();
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
  if(isset($_REQUEST['A1']))
  {
    $picname=$_REQUEST['a1'];
    $qry="update patti set patti='$picname' where id=1";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted A1')</script>";
    }
  }

  if(isset($_REQUEST['A2']))
  {
    $picname=$_REQUEST['a2'];
    $qry="update patti set patti='$picname' where id=2";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted A2')</script>";
    }
  }

  if(isset($_REQUEST['A3']))
  {
    $picname=$_REQUEST['a3'];
    $qry="update patti set patti='$picname' where id=3";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted A3')</script>";
    }
  }

  if(isset($_REQUEST['B1']))
  {
    $picname=$_REQUEST['b1'];
    $qry="update patti set patti='$picname' where id=4";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted B1')</script>";
    }
  }

  if(isset($_REQUEST['B2']))
  {
    $picname=$_REQUEST['b2'];
    $qry="update patti set patti='$picname' where id=5";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted B5')</script>";
    }
  }

  if(isset($_REQUEST['B3']))
  {
    $picname=$_REQUEST['b3'];
    $qry="update patti set patti='$picname' where id=6";
    $res=mysqli_query($conn,$qry);
    if($res)
    {
      echo "<script>alert('inserted B3')</script>";
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
    <script type="text/javascript" src="teenpattiadmin.js"></script>
    <script type="text/javascript" src="timeadmin.js"></script>

    <title>teenpatti/admin</title>
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
          <a class="dropdown-item" href="../views/admin.php">Dashboard</a>
          <a class="dropdown-item" href="details.php">Detailed View</a>
        </div>
      </li>
    </ul>

    <!-- Flexbox container for aligning the toasts -->
      <div class="card mt-5">
        <div class="card-body">
          <h1>timeleft</h1>
          <h1 id="countdown">00</h1>         
        </div>
      </div>

      <div class="card mt-5">
        <div class="card-body">
          <div class="card">
            TEAM A
            <div class="card-body">
              <h1 id="scorea"></h1>
            </div>            
          </div>

          <div class="card">
            TEAM B
            <div class="card-body">
              <h1 id="scoreb"></h1>
            </div>            
          </div>

          <div class="card">
            <div class="card-body">
              <button class="btn btn-primary mb-2" onclick="teamafunc();">TEAM A WON</button>
              <button class="btn btn-primary mb-2" onclick="teambfunc();">TEAM B WON</button>
              <button class="btn btn-primary mb-2" onclick="restartfunc();">RESTART MATCH</button>
              <button class="btn btn-primary mb-2" onclick="refreshfunc();">RESTART TIME</button>
              <button class="btn btn-primary mb-2" onclick="closefunc();">Close Session</button>
              <button class="btn btn-primary mb-2" onclick="startfunc();">Start Session</button>
            </div>            
          </div>
          <form action="" method="post">
            <h6>A1</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png"  class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="a1" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="a1" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="a1" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="a1" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="a1" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="a1" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="a1" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="a1" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="a1" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="a1" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="a1" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="a1" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="a1" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png" name="a1" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="a1" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="a1" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="a1" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="a1" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="a1" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="a1" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="a1" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="a1" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="a1" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="a1" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="a1" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="a1" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="a1" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="a1" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="a1" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="a1" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="a1" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="a1" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="a1" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="a1" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="a1" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" name="a1" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="a1" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="a1" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="a1" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="a1" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="a1" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="a1" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="a1" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="a1" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="a1" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="a1" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="a1" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="a1" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="a1" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="a1" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="a1" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="a1" id="exampleCheck1">
              
              <div>
                <button class="btn btn-primary" name="A1" value="submit">A1 SET</button>
              </div>
          </form>
        </div>
      </div>
      <!-- team A card 2 -->

      <div class="card mt-5">
        <div class="card-body">
          <form action="" method="post">
            <h6>A2</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="a2" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="a2" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="a2" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="a2" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="a2" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="a2" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="a2" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="a2" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="a2" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="a2" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="a2" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="a2" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="a2" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png" name="a2" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="a2" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="a2" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="a2" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="a2" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="a2" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="a2" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="a2" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="a2" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="a2" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="a2" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="a2" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="a2" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="a2" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="a2" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="a2" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="a2" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="a2" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="a2" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="a2" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="a2" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="a2" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="a2" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="a2" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="a2" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="a2" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="a2" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="a2" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="a2" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="a2" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="a2" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="a2" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="a2" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="a2" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="a2" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="a2" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="a2" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="a2" id="exampleCheck1">
              
              <div>
                <button class="btn btn-primary" name="A2" value="submit">A2 SET</button>
              </div>
          </form>
        </div>
      </div>

      <!-- team A card 3 -->

      <div class="card mt-5">
        <div class="card-body">
          <form action="" method="post">
            <h6>A3</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png"  class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="a3" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="a3" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="a3" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="a3" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="a3" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="a3" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="a3" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="a3" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="a3" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="a3" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png"class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="a3" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="a3" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="a3" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png"class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png"  name="a3" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="a3" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="a3" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="a3" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="a3" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="a3" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="a3" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="a3" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="a3" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="a3" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="a3" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="a3" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="a3" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="a3" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="a3" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="a3" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="a3" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="a3" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="a3" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="a3" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="a3" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="a3" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" name="a3" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="a3" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="a3" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="a3" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="a3" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="a3" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="a3" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="a3" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="a3" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="a3" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="a3" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="a3" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="a3" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="a3" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="a3" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="a3" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="a3" id="exampleCheck1">
            
              <div>
                <button class="btn btn-primary" name="A3" value="submit">A3 SET</button>
              </div>
          </form>
        </div>
      </div>

      <!-- team B card 1 -->
    
    <div class="card mt-5">
        <div class="card-body">
          <form action="" method="post">
            <h6>B1</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="b1" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="b1" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="b1" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="b1" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="b1" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="b1" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="b1" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="b1" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="b1" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="b1" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="b1" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="b1" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="b1" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png" name="b1" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="b1" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="b1" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="b1" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="b1" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="b1" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="b1" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="b1" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="b1" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="b1" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="b1" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="b1" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="b1" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="b1" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="b1" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="b1" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="b1" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="b1" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="b1" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="b1" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="b1" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="b1" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" name="b1" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="b1" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="b1" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="b1" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="b1" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="b1" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="b1" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="b1" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="b1" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="b1" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="b1" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="b1" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="b1" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="b1" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="b1" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="b1" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="b1" id="exampleCheck1">
              
              <div>
                <button class="btn btn-primary" name="B1" value="submit">B1 SET</button>
              </div>
          </form>
        </div>
      </div>

      <!-- team B card 2 -->

      <div class="card mt-5">
        <div class="card-body">
          <form action="" method="post">
            <h6>B2</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="b2" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="b2" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="b2" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="b2" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="b2" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="b2" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="b2" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="b2" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="b2" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="b2" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="b2" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="b2" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="b2" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png" name="b2" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="b2" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="b2" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="b2" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="b2" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="b2" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="b2" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="b2" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="b2" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="b2" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="b2" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="b2" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="b2" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="b2" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="b2" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="b2" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="b2" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="b2" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="b2" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="b2" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="b2" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="b2" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" name="b2" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="b2" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="b2" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="b2" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="b2" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="b2" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="b2" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="b2" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="b2" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="b2" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="b2" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="b2" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="b2" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="b2" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="b2" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="b2" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="b2" id="exampleCheck1">
              
              <div>
                <button class="btn btn-primary" name="B2" value="submit">B2 SET</button>
              </div>
          </form>
        </div>
      </div>

      <!-- team B card 3 -->

      <div class="card mt-5">
        <div class="card-body">
          <form action="" method="post">
            <h6>B3</h6>
            <!-- card 1 -->
            
              <img src="../images/deck/2C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2C.png" name="b3" id="exampleCheck1">
            
            <!-- card 2 -->
            
              <img src="../images/deck/2D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2D.png" name="b3" id="exampleCheck1">
            
            <!-- card 3 -->
            
              <img src="../images/deck/2H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2H.png" name="b3" id="exampleCheck1">
            
            <!-- card 4 -->
            
              <img src="../images/deck/2S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="2S.png" name="b3" id="exampleCheck1">
            
            <!-- card 5 -->
            
              <img src="../images/deck/3C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3C.png" name="b3" id="exampleCheck1">
            
            <!-- card 6 -->
           
              <img src="../images/deck/3D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3D.png" name="b3" id="exampleCheck1">
            
            <!-- card 7 -->
            
              <img src="../images/deck/3H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3H.png" name="b3" id="exampleCheck1">
            
            <!-- card 8 -->
            
              <img src="../images/deck/3S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="3S.png" name="b3" id="exampleCheck1">
            
            <!-- card 9 -->
            
              <img src="../images/deck/4C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4C.png" name="b3" id="exampleCheck1">
            
            <!-- card 10 -->
           
              <img src="../images/deck/4D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4D.png" name="b3" id="exampleCheck1">
            
            <!-- card 11 -->
            
              <img src="../images/deck/4H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4H.png" name="b3" id="exampleCheck1">
            
            <!-- card 12 -->
            
              <img src="../images/deck/4S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="4S.png" name="b3" id="exampleCheck1">
            
            <!-- card 13 -->
            
              <img src="../images/deck/5C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5C.png" name="b3" id="exampleCheck1">
            
            <!-- card 14 -->
           
              <img src="../images/deck/5D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5D.png" name="b3" id="exampleCheck1">
            
            <!-- card 15 -->
            
              <img src="../images/deck/5H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5H.png" name="b3" id="exampleCheck1">
            
            <!-- card 16 -->
            
              <img src="../images/deck/5S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="5S.png" name="b3" id="exampleCheck1">
            
            <!-- card 17 -->
            
              <img src="../images/deck/6C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6C.png" name="b3" id="exampleCheck1">
            
            <!-- card 18 -->
            
              <img src="../images/deck/6D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6D.png" name="b3" id="exampleCheck1">
            
            <!-- card 19 -->
            
              <img src="../images/deck/6H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6H.png" name="b3" id="exampleCheck1">
            
            <!-- card 20-->
           
              <img src="../images/deck/6S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="6S.png" name="b3" id="exampleCheck1">
            
            <!-- card 21 -->
            
              <img src="../images/deck/7C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7C.png" name="b3" id="exampleCheck1">
            
            <!-- card 22 -->
           
              <img src="../images/deck/7D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7D.png" name="b3" id="exampleCheck1">
            
            <!-- card 23 -->
            
              <img src="../images/deck/7H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7H.png" name="b3" id="exampleCheck1">
           
            <!-- card 24-->
            
              <img src="../images/deck/7S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="7S.png" name="b3" id="exampleCheck1">
           
            <!-- card 25-->
           
              <img src="../images/deck/8C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8C.png" name="b3" id="exampleCheck1">
            
            <!-- card 26 -->
            
              <img src="../images/deck/8D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8D.png" name="b3" id="exampleCheck1">
            
            <!-- card 27 -->
            
              <img src="../images/deck/8H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8H.png" name="b3" id="exampleCheck1">
            
            <!-- card 28 -->
            
              <img src="../images/deck/8S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="8S.png" name="b3" id="exampleCheck1">
            
            <!-- card 29 -->
            
              <img src="../images/deck/9C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9C.png" name="b3" id="exampleCheck1">
           
            <!-- card 30 -->
           
              <img src="../images/deck/9D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9D.png" name="b3" id="exampleCheck1">
            
            <!-- card 31 -->
            
              <img src="../images/deck/9H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9H.png" name="b3" id="exampleCheck1">
            
            <!-- card 32 -->
            
              <img src="../images/deck/9S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="9S.png" name="b3" id="exampleCheck1">
            
            <!-- card 33 -->
            
              <img src="../images/deck/10C.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10C.png" name="b3" id="exampleCheck1">
            
             <!-- card 34 -->
            
              <img src="../images/deck/10D.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10D.png" name="b3" id="exampleCheck1">
           
            <!-- card 35 -->
            
              <img src="../images/deck/10H.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10H.png" name="b3" id="exampleCheck1">
            
            <!-- card 36 -->
           
              <img src="../images/deck/10S.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="10S.png" name="b3" id="exampleCheck1">
           
            <!-- card 37 -->
            
              <img src="../images/deck/AC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AC.png" name="b3" id="exampleCheck1">
            
            <!-- card 38 -->
            
              <img src="../images/deck/AD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AD.png" name="b3" id="exampleCheck1">
            
            <!-- card 39 -->
            
              <img src="../images/deck/AH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AH.png" name="b3" id="exampleCheck1">
            
            <!-- card 40 -->
           
              <img src="../images/deck/AS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="AS.png" name="b3" id="exampleCheck1">
            
            <!-- card 41 -->
            
              <img src="../images/deck/JC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JC.png" name="b3" id="exampleCheck1">
            
            <!-- card 42 -->
            
              <img src="../images/deck/JD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JD.png" name="b3" id="exampleCheck1">
            
            <!-- card 43 -->
            
              <img src="../images/deck/JH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JH.png" name="b3" id="exampleCheck1">
            
            <!-- card 44 -->
            
              <img src="../images/deck/JS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="JS.png" name="b3" id="exampleCheck1">
            
            <!-- card 45 -->
           
              <img src="../images/deck/KC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KC.png" name="b3" id="exampleCheck1">
            
            <!-- card 46 -->
            
              <img src="../images/deck/KD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KD.png" name="b3" id="exampleCheck1">
            
            <!-- card 47 -->
            
              <img src="../images/deck/KH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KH.png" name="b3" id="exampleCheck1">
            
            <!-- card 48 -->
            
              <img src="../images/deck/KS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="KS.png" name="b3" id="exampleCheck1">
            
            <!-- card 49 -->
            
              <img src="../images/deck/QC.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QC.png" name="b3" id="exampleCheck1">
            
            <!-- card 50 -->
            
              <img src="../images/deck/QD.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QD.png" name="b3" id="exampleCheck1">
            
            <!-- card 51 -->
            
              <img src="../images/deck/QH.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QH.png" name="b3" id="exampleCheck1">
            
            <!-- card 52 -->
            
              <img src="../images/deck/QS.png" class="img-fluid mr-1" height="80" width="70">
              <input type="radio" class="form-check-input" value="QS.png" name="b3" id="exampleCheck1">
              
              <div>
                <button class="btn btn-primary" name="B3" value="submit">B3 SET</button>
              </div>
          </form>
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