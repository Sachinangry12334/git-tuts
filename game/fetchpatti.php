<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['cusername']) && !empty($_SESSION['cpassword']))
{
	if($_REQUEST['get']=='teama')
	{
		$ta='a';
		$qrya="select * from patti where team='$ta'";
		$resa=mysqli_query($conn,$qrya);
		while($dataa=mysqli_fetch_assoc($resa))
		{
			echo $at = '<img src="../images/deck/'.$dataa['patti'].'" class="img-fluid mr-1" height="70" width="60">';
		}
	}

	if($_REQUEST['get']=='teamb')
	{
		$tb='b';
		$qryb="select * from patti where team='$tb'";
		$resb=mysqli_query($conn,$qryb);
		while($datab=mysqli_fetch_assoc($resb))
		{
			echo $bt = '<img src="../images/deck/'.$datab['patti'].'" class="img-fluid mr-1" height="70" width="60">';
		}
	}
	
}
?>