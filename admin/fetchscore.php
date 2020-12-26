<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	//data fetch request
	if($_REQUEST['type']=='scorea')
	{
		$pts=0;
		$team='A';
		$teamr='AP';
		$qry="select value from betadmin where team='$team' or team='$teamr'";
		$res=mysqli_query($conn,$qry);
		while($data=mysqli_fetch_assoc($res))
		{
			$pts=$pts+$data['value'];
		}
		echo $pts;
	}
	if($_REQUEST['type']=='scoreb')
	{
		$ptsb=0;
		$teamb='B';
		$teamrb='BP';
		$qryb="select value from betadmin where team='$teamb' or team='$teamrb'";
		$resb=mysqli_query($conn,$qryb);
		while($datab=mysqli_fetch_assoc($resb))
		{
			$ptsb=$ptsb+$datab['value'];
		}
		echo $ptsb;
	}
}
?>