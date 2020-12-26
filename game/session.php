<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['cusername']) && !empty($_SESSION['cpassword']))
{
	if($_REQUEST['get']=='session')
	{
		$qryas="select status from gamestatus";
		$resas=mysqli_query($conn,$qryas);
		$resul=mysqli_fetch_assoc($resas);
		echo $resul['status'];
	}
}
?>