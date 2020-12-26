<?php
session_start();
include '../db/dbcon.php';

if(!empty($_SESSION['cusername']) && !empty($_SESSION['cpassword']))
{
  $cusr=$_SESSION['cusername'];
  $cpswd=$_SESSION['cpassword'];
  $qry="select * from client where username='$cusr' and password='$cpswd'";
  $run=mysqli_query($conn,$qry);
  $res=mysqli_fetch_array($run);
?>

<!-- php end -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="teeninter.js"></script>
    <script type="text/javascript" src="fetchpatti.js"></script>
    <script type="text/javascript" src="session.js"></script>
    <script type="text/javascript" src="timer.js"></script>
     
    <title>teenpatti</title>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <style type="text/css">
      .mynav li
      {
        border: 2px solid white;
        width: 200px;
        margin-bottom: 10px;
        border-top-right-radius: 10px; 
        border-bottom-right-radius:10px;
      }
        .dashboard
        {
            background-color: #0009; 
            font-size: 35px;
        }
        .height
        {
          min-height: 80vh;
        }
        .hcard
        {
          min-height: 60vh;
          background-image: url(../images/backcard.jpg);
          background-size: cover;
          background-repeat: no-repeat;
        }
        .timefont
        {
          font-family: 'Metal Mania', cursive;
          font-size: 45px;
        }
		
    </style>
  </head>
  <body>
    <ul class="nav justify-content-center bg-info">
      <ul class="nav justify-content-center">
        <li class="nav-item text-light" style="font-size: 25px;"><img src="../images/flogo.png" height="64" width="64" alt="FENOBET">FENOBET</li>
      </ul>
      <li class="nav-item mr-auto">
        <a class="nav-link active text-light" hidden href="#">Active</a>
      </li>

      <li class="nav-item mr-auto">
        <h6 class="nav-link active text-light mt-3">POINTS:<span id="bal"></span></h6>
      </li>
      <li class="nav-item dropdown mt-3">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Basic
        </a>
        <div class="dropdown-menu bg-info mr-4" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../views/client.php">Dashboard</a>
          <p class="dropdown-item" data-toggle="modal" data-target="#rules">Rules</p>
          <a class="dropdown-item" hidden href="#">Teen Patti</a>
        </div>
      </li>
      <li class="nav-item dropdown mr-5 mt-3">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=$res['username']?>
        </a>
        <div class="dropdown-menu bg-info mr-2" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../views/cstmt.php">A/c statement</a>
          <a class="dropdown-item" href="../views/cpclient.php">Change Password</a>
          <a class="dropdown-item" href="../views/logout.php">Logout</a>
        </div>
      </li>
    </ul>


    <!-- rules model -->
              <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">rules</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="../images/rule.jpg" alt="rules" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>

    <!-- rules model end -->


    <!-- alert set -->
              

               <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-primary" role="alert" id="alert">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- alert set -->



      <div class="container-fluid">
        
          
            <div class="row">

            <!-- column 1 card area -->
              <div class="col-sm-8">
                <div class="card">
                  <div class="card-body height">
                    <!-- colum game area -->
                    <div class="card">
                      <div class="card-body bg-secondary rounded">
                        <!-- card deck three card team A -->
                        <div class="card">
                          <div class="card-body hcard">


                            <div>
                              <h6 class="text-light">PLAYER A</h6>
                              <div id="teama">
                                
                              </div>
                            </div>

                            <div>
                              <h6 class="text-light">PLAYER B</h6>
                              <div id="teamb">
                                
                              </div>
                            </div>


                            <div class="text-light mt-5 rounded nav justify-content-center" style="background: #0009;min-height: 10vh;font-size: 55px">
                              <div class="text-light align-text-center" id="timeslap">00</div>
                            </div>
                          </div>
                        </div>
                            
                      </div>
                    </div>
                    <!-- game area end -->
                    
                    <ul class="nav justify-content-end">
                      <li class="nav-item">
                        <h6 class="nav-link mr-5 text-primary" href="#">Back</h6>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link ml-5" href="#"></a>
                      </li>
                    </ul>
                    <!-- btn area start -->
                    <ul class="nav" id="sess1" style="display: none;">
                      <li class="nav-item nav justify-content-start">
                        <a class="nav-link" href="#">TEAM A</a>
                      </li>
                      
                      <li class="nav-item ml-auto">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addbtnvala">1.98 TEAM A</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addpaira">Pair Plus A</button>
                      </li>
                    </ul>

                    <ul class="nav" id="sess2" style="display: none;">
                      <li class="nav-item nav justify-content-start">
                        <a class="nav-link" href="#">TEAM B</a>
                      </li>
                      
                      <li class="nav-item ml-auto">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addbtnvalb">1.98 TEAM B</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addbtnvalb">Pair Plus B</button>
                      </li>
                    </ul>
                    <!-- btn area finished -->
                  </div>
                </div>
              </div>   

              <!-- modal for set value a -->
              
              <div class="modal fade" id="addbtnvala" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Set Bet Team A</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary" type="button" id="seta">Set</button>
                        </div>
                        <input type="text" class="form-control" id="inpa" placeholder="min-100" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>

                      <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismissa" role="alert" style="display: none">
                           <p id="alerta"></p>
                        </div>
                      <!-- buttons -->
                      <div class="card">
                        <div class="card-body nav justify-content-center">
                          <button type="button" class="btn btn-outline-primary" id="btna1">100</button>
                          <button type="button" class="btn btn-outline-primary" id="btna2">500</button>
                          <button type="button" class="btn btn-outline-primary" id="btna3">700</button>
                          <button type="button" class="btn btn-outline-primary" id="btna4">1000</button>
                          <button type="button" class="btn btn-outline-primary" id="btna5">1500</button>
                          <div class="nav justify-content-start mt-5">
                            <button type="button" class="btn btn-outline-primary mr-2" id="cleara">Clear</button>
                            <button type="button" class="btn btn-outline-primary mr-2" id="submita">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- btn val b -->

              <div class="modal fade" id="addbtnvalb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Set Bet Team B</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- input set -->
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary" type="button" id="setb">Set</button>
                        </div>
                        <input type="text" class="form-control" id="inpb" placeholder="min-100" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>

                      <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismissb" role="alert" style="display: none">
                           <p id="alertb"></p>
                        </div>
                      <!-- buttons -->
                      <div class="card">
                        <div class="card-body nav justify-content-center">
                          <button type="button" class="btn btn-outline-primary" id="btnb1">100</button>
                          <button type="button" class="btn btn-outline-primary" id="btnb2">500</button>
                          <button type="button" class="btn btn-outline-primary" id="btnb3">700</button>
                          <button type="button" class="btn btn-outline-primary" id="btnb4">1000</button>
                          <button type="button" class="btn btn-outline-primary" id="btnb5">1500</button>
                          <div class="nav justify-content-start mt-5">
                            <button type="button" class="btn btn-outline-primary mr-2" id="clearb">Clear</button>
                            <button type="button" class="btn btn-outline-primary mr-2" id="submitb">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- add pair A -->

              <div class="modal fade" id="addpaira" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Set Pair Team A</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- input set -->
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary" type="button" id="setap">Set</button>
                        </div>
                        <input type="text" class="form-control" id="inpap" placeholder="min-100" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>

                      <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismissap" role="alert" style="display: none">
                           <p id="alertap"></p>
                        </div>
                      <!-- buttons -->
                      <div class="card">
                        <div class="card-body nav justify-content-center">
                          <button type="button" class="btn btn-outline-primary" id="btnap1">100</button>
                          <button type="button" class="btn btn-outline-primary" id="btnap2">500</button>
                          <button type="button" class="btn btn-outline-primary" id="btnap3">700</button>
                          <button type="button" class="btn btn-outline-primary" id="btnap4">1000</button>
                          <button type="button" class="btn btn-outline-primary" id="btnap5">1500</button>
                          <div class="nav justify-content-start mt-5">
                            <button type="button" class="btn btn-outline-primary mr-2" id="clearap">Clear</button>
                            <button type="button" class="btn btn-outline-primary mr-2" id="submitap">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- add pair b -->
              <div class="modal fade" id="addpairb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Set Pair Team B</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- input set -->
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-secondary" type="button" id="setbp">Set</button>
                        </div>
                        <input type="text" class="form-control" id="inpbp" placeholder="min-100" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      </div>

                      <div class="alert alert-warning alert-dismissible fade show mt-2" id="dismissbp" role="alert" style="display: none">
                           <p id="alertbp"></p>
                        </div>
                      <!-- buttons -->
                      <div class="card">
                        <div class="card-body nav justify-content-center">
                          <button type="button" class="btn btn-outline-primary" id="btnbp1">100</button>
                          <button type="button" class="btn btn-outline-primary" id="btnbp2">500</button>
                          <button type="button" class="btn btn-outline-primary" id="btnbp3">700</button>
                          <button type="button" class="btn btn-outline-primary" id="btnbp4">1000</button>
                          <button type="button" class="btn btn-outline-primary" id="btnbp5">1500</button>
                          <div class="nav justify-content-start mt-5">
                            <button type="button" class="btn btn-outline-primary mr-2" id="clearbp">Clear</button>
                            <button type="button" class="btn btn-outline-primary mr-2" id="submitbp">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- column 2 rule area -->
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-body height">
                    <ul class="nav bg-info rounded">
                      <li class="nav-item">
                        <h6 class="nav-link active text-light">Rules</h6>
                      </li>
                    </ul>
                    <div class="card">
                      <div class="card-body">
                        <ul class="list-group">
                          <li class="list-group-item align-item-center">Pair Plus</li>
                          <div class="row">
                            <div class="col-sm-8">
                              <li class="list-group-item">Pair (Double)</li>
                              <li class="list-group-item">Flush (Color)</li>
                              <li class="list-group-item">Straight (Rown)</li>
                              <li class="list-group-item">Trio (Teen)</li>
                              <li class="list-group-item">Straight Flush (Pakki Rown)</li>
                            </div>
                            <div class="col-sm-4">
                              <li class="list-group-item">1 To 1</li>
                              <li class="list-group-item">1 To 4</li>
                              <li class="list-group-item">1 To 6</li>
                              <li class="list-group-item">1 To 35</li>
                              <li class="list-group-item">1 To 45</li>
                            </div>
                          </div>
                        </ul>
                      </div>
                    </div>
                    <!-- table for transaction -->
                    <ul class="nav bg-info rounded mt-3">
                      <li class="nav-item">
                        <h6 class="nav-link text-light" >BET HISTORY</h6>
                      </li>
                    </ul>
                    
                        <a class="nav-link" data-toggle="modal" onclick="betbet();" href="#bethistory">Know More</a>
                  </div>
                </div>
              </div>
            </div>
      </div>



      <!-- model for bet history -->

      <div class="modal fade" id="bethistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">BET HISTORY</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Value</th>
                    <th scope="col">Team</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody id="bethistoryp">
                  
                </tbody>
              </table>
              
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="teenpattiin.js"></script> 


   

   <script type="text/javascript">
      setInterval(balancer,1000);

      function balancer()
      {
        var xhr=new XMLHttpRequest();
        xhr.open('get','fetch.php?get=bal',true);
        xhr.onload=function()
        {
          document.getElementById('bal').innerHTML=this.responseText;
        }
        xhr.send();
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