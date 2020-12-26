<?php
include '../db/dbcon.php';
session_start();
if(!empty($_SESSION['adusername']) && !empty($_SESSION['adpassword']))
{
	if($_REQUEST['type']=='close')
	{
		$st='close';
		$qryac="update gamestatus set status='$st'";
		$resac=mysqli_query($conn,$qryac);
		if($resac)
	    {
	      echo "Close game";
	    }
	}
}
?>