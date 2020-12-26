<?php
session_start();
include '../db/dbcon.php';

if(!empty($_SESSION['cusername']) && !empty($_SESSION['cpassword']))
{
  $cus=$_SESSION['cusername'];
  $cpsw=$_SESSION['cpassword'];
  $qr="select * from client where username='$cus' and password='$cpsw'";
  $ru=mysqli_query($conn,$qr);
  $re=mysqli_fetch_array($ru);
  if($_REQUEST['get']=='bal')
  {
  	echo $re['points'];	
  }
  if($_REQUEST['get']=='bhistory')
  {
	$cid = $_SESSION['cusername'];
  	$send="select * from bet where clientid='$cid' order by id desc";
  	$get=mysqli_query($conn,$send);
  	
    $num=1;

    // here a teble send 
    while($fetch=mysqli_fetch_assoc($get))
    {

      echo $table='<tr>
                <th scope="row">'.$num.'</th>
                <td>'.$fetch['clientid'].'</td>
                <td>'.$fetch['value'].'</td>
                <td>'.$fetch['team'].'</td>
                <td>'.$fetch['status'].'</td>
               </tr>';

      $num++;
    }
  	
  }
} 
?>
