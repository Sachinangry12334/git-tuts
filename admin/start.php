<?php
include '../db/dbcon.php';
session_start();
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	if($_REQUEST['type']=='start')
	{
		$st='start';
		$qryas="update gamestatus set status='$st'";
		$resas=mysqli_query($conn,$qryas);
		if($resas)
	    {
	      echo "Start game";
	    }
	}
}
?>