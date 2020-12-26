<?php
session_start();
include '../db/dbcon.php';
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	if(!empty($_REQUEST['time']))
    {
		$time=$_REQUEST['time'];
		$qry="update time set timer='$time' where id=1";
		$res=mysqli_query($conn,$qry);
		if($res)
		{
			echo "undefined";
		}
    }
}
?>