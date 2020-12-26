
<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
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

    <title>detail</title>
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
          <a class="dropdown-item" href="teenpattiadmin.php">Back</a>
        </div>
      </li>
    </ul>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">client</th>
          <th scope="col">value</th>
          <th scope="col">team</th>
        </tr>
      </thead>
      <tbody id="data">
       
      </tbody>
    </table>



        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">
      setInterval(fetchdata,1000)
      
      function fetchdata()
      {
        var req=new XMLHttpRequest();
        req.open('get','betdetail.php?type=fetch',true);
        req.onload=function()
        {
          document.getElementById('data').innerHTML=this.responseText;
        }
        req.send();
      }
    </script>
  </body>
</html>

<?php
}
else
{
  header('location:../index.php');
}
?>